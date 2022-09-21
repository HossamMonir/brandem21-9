<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blog = DB::table('blog')
            ->orderBy('display_order')
            ->get();

        return view('admin.blog.index', compact('blog'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string'],
            'image' => ['required'],
            'content' => ['required'],
            'category' => ['required'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
        ]);
        $photo = $request->file('image');
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('images/blog/', $newPhoto);

        $blog = DB::table('blog')->insert([
            'category' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $newPhoto,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()
            ->route('blog-index')
            ->with('message', 'Blog section has been added!');

        // return \Redirect::back()->with('message', 'Blog has been added!');
    }

    public function show($id)
    {
        $blog = DB::table('blog')
            ->where('id', $id)
            ->get();
        $blog = $blog[0];

        return view('admin.blog.edit', compact('blog'));
    }

    public function edit($id)
    {
        $blog = DB::table('blog')
            ->where('id', $id)
            ->get();
        $blog = $blog[0];

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        if ($request->has('image')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/blog/', $newPhoto);
        } else {
            $newPhoto = $request->image;
        }

        $blog = DB::table('blog')
            ->where('id', $id)
            ->update([
                'category' => $request->category,
                'title' => $request->title,
                'image' => $newPhoto,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                'updated_by' => Auth::id(),
                'updated_at' => Carbon::now(),
            ]);

        return \Redirect::back()->with('message', 'Blog has been updated!');
    }

    public function destroy($id)
    {
        $blog = DB::table('blog')
            ->where('id', $id)
            ->delete();

        return response()->json(['message' => 'Blog deleted successfully']);
    }

    public function updateOrder(Request $request, $id)
    {
        $blog = DB::table('blog')
            ->where('id', $id)
            ->get();
        $order = $request->display_order;
        $blog->display_order = $order;

        return \Redirect::back()->with('message', 'Order has been updated!');
    }
}

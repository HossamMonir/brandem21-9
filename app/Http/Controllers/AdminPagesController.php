<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = DB::table('pages')->get();

        return view('admin.pages.index', compact('pages'));
    }

    public function show($id)
    {
        $page = DB::table('pages')
            ->where('id', $id)
            ->get();
        $page = $page[0];

        return view('admin.pages.edit', compact('page'));
    }

    public function edit($id)
    {
        $page = DB::table('pages')
            ->where('id', $id)
            ->get();
        $page = $page[0];

        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = DB::table('pages')
            ->where('id', $id)
            ->get();
        $page = $page[0];

        if ($request->has('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $newbannerImage = time().$bannerImage->getClientOriginalName();
            $bannerImage->move('images/', $newbannerImage);
        } else {
            $newbannerImage = $request->banner_image;
        }

        if ($request->has('og_image')) {
            $ogImage = $request->file('og_image');
            $newogImage = time().$ogImage->getClientOriginalName();
            $ogImage->move('images/seo/', $newogImage);
        } else {
            $newogImage = $request->og_image;
        }

        $page = DB::table('pages')
            ->where('id', $id)
            ->update([
                'banner_title' => $request->banner_title,
                'banner_title2' => $request->banner_title2,
                'banner_subtitle' => $request->banner_subtitle,
                'banner_image' => $newbannerImage,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                'og_image' => $newogImage,
                'updated_by' => Auth::id(),
                'updated_at' => Carbon::now(),
            ]);

        // return \Redirect::back()->with('message','Page has been updated!');
        return redirect()
            ->route('pages-index')
            ->with('message', 'Pages section has been added!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = DB::table('about')
            ->orderBy('display_order')
            ->get();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
    
        $photo = $request->file('section_image');
        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('images/', $newPhoto);

        $about = DB::table('about')->insert([
             'section_title' => $request->section_title,
            'section_title2' => $request->section_title2,
            'section_color' => $request->section_color,
            'section_image' => $newPhoto,
            'section_subtitle' => $request->section_subtitle,
            'section_text' => $request->section_text,
            'featured' => $request->featured,
            'display_order' => $request->display_order,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);
        return redirect()
            ->route('about-index')
            ->with('message', 'About section has been added!');
        // return \Redirect::back()->with('message','About section has been added!');
    }

    public function show($id)
    {
        $about = DB::table('about')
            ->where('id', $id)
            ->get();
        $about = $about[0];
        return view('admin.about.edit', compact('about'));
    }

    public function edit($id)
    {
        $about = DB::table('about')
            ->where('id', $id)
            ->get();
        $about = $about[0];
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        if ($request->has('section_image')) {
            $photo = $request->file('section_image');
            $newPhoto = time() . $photo->getClientOriginalName();
            $photo->move('images/', $newPhoto);
            DB::table('about')
                ->where('id', $id)
                ->update([
                    'section_image' => $newPhoto,
                ]);
        }
            $about = DB::table('about')
                ->where('id', $id)
                ->update([
              'section_title' => $request->section_title,
            'section_title2' => $request->section_title2,
            'section_color' => $request->section_color,
            // 'section_image' => $newPhoto,
            'section_subtitle' => $request->section_subtitle,
            'section_text' => $request->section_text,
            'featured' => $request->featured,
            'display_order' => $request->display_order,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now()
                ]);
        
        return redirect()
            ->route('about-index')
            ->with('message', 'About section has been updated!');

        // return \Redirect::back()->with('message','About section has been updated!');
    }

    public function destroy($id)
    {
        $about = DB::table('about')
            ->where('id', $id)
            ->delete();
        return response()->json([
            'message' => 'About section deleted successfully',
        ]);
    }
}
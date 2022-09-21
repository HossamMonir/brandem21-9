<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slider_images = DB::table('slider_images')->orderBy('display_order')->get();

        return view('admin.slider-images.index', compact('slider_images'));
    }

    public function create()
    {
        return view('admin.slider-images.create');
    }

    public function store(Request $request)
    {
        if ($request->has('image')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/slider/', $newPhoto);
        } else {
            $newPhoto = null;
        }

        $slider_images = DB::table('slider_images')->insert([
            'title' => $request->title,
            'title2' => $request->title2,
            'link' => $request->link,
            'image' => $newPhoto,
            'video' => $request->video,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return \Redirect::back()->with('message', 'Slide image has been added!');
    }

    public function show($id)
    {
        $slider = DB::table('slider_images')->where('id', $id)->get();
        $slider = $slider[0];

        return view('admin.slider-images.edit', compact('slider'));
    }

    public function edit($id)
    {
        $slider = DB::table('slider_images')->where('id', $id)->get();
        $slider = $slider[0];

        return view('admin.slider-images.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        if ($request->has('image')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/slider/', $newPhoto);
        } else {
            $newPhoto = $request->image;
        }

        $slider = DB::table('slider_images')->where('id', $id)->update([
            'title' => $request->title,
            'title2' => $request->title2,
            'image' => $newPhoto,
            'video' => $request->video,
            'link' => $request->link,
            'display_order' => $request->display_order,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);

        return \Redirect::back()->with('message', 'Slider image has been updated!');
    }

    public function destroy($id)
    {
        $slider = DB::table('slider_images')->where('id', $id)->delete();

        return response()->json(['message' => 'Slider image deleted successfully']);
    }
}

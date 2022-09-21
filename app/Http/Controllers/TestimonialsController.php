<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = DB::table('testimonials')->get();
       return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.testimonials.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        DB::table('testimonials')->insert([
            'name' =>$request->name,
            'title' =>$request->title,
            'description' =>$request->description,
        ]);
         return redirect()->route('testimonials-index')->with('message', 'Testimonial  has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $testimonial = DB::table('testimonials')->where('id', $id)->get();
              $testimonial = $testimonial[0];
        return view('admin.testimonials.edit',compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('testimonials') ->where('id', $id)->update([
            'name' =>$request->name,
            'title' =>$request->title,
            'description' =>$request->description,
        ]);
         return redirect()->route('testimonials-index')->with('message', 'Testimonial  has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('testimonials')
            ->where('id', $id)
            ->delete();
        return response()->json(['message' => 'Testimonial deleted successfully']);

    }
}

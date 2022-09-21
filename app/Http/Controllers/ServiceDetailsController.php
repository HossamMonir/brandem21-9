<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($service_id)
    {
        $servdetails = DB::table('svdetails')->where('service_id', '=', $service_id)
            ->get();
        // return $servdetails;
        $services = DB::table('services')->where('id', '=', $service_id)->get();

        return view('admin.service-details.index', compact('services', 'service_id', 'servdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($service_id)
    {
        return view('admin.service-details.create', compact('service_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($service_id, Request $request)
    {
        $photo = $request->file('section_image');
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('images/services/', $newPhoto);
        // $newPhoto= $request->section_image;

        $service = DB::table('svdetails')->insert([
            'service_id' => $request->service_id,
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
            'updated_at' => Carbon::now(),
        ]);

        return  redirect()->route('service-details-index', $service_id)->with(['message' => 'service detail has been added!']);
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
    public function edit($service_id, $id)
    {
        $service = DB::table('svdetails')
         ->where('id', '=', $id)
         ->get();
        $service = $service[0];

        return view('admin.service-details.edit', compact('service', 'service_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id, $id)
    {
        if ($request->has('section_image')) {
            $photo = $request->file('section_image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('section_images/services/', $newPhoto);

            DB::table('svdetails')->where('id', $id)->update([
                'section_image' => $newPhoto,
            ]);
        }

        $service = DB::table('svdetails')->where('id', $id)->update([
            'service_id' => $request->service_id,
            'section_title' => $request->section_title,
            'section_title2' => $request->section_title2,
            'section_color' => $request->section_color,
            'section_subtitle' => $request->section_subtitle,
            'section_text' => $request->section_text,

            'featured' => $request->featured,
            'display_order' => $request->display_order,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()
            ->route('service-details-index', $service_id)
            ->with('message', 'service section has been added!');

        // return \Redirect::back()->with(
        //     'message',
        //     'Work details has been updated!'
        // );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id, $id)
    {
        $service = DB::table('svdetails')
         ->where('id', $id)
            ->delete();

        return response()->json(['message' => 'Service Details deleted successfully']);
    }
}

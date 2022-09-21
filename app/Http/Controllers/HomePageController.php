<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $homes = DB::table('homepage')
            ->orderBy('display_order')->get();
     return view('admin.home.index',compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $photo = $request->file('section_image');
        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('images/homepage', $newPhoto);

        $homes = DB::table('homepage')->insert([
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
            ->route('homepage-index')
            ->with('message', 'Home section has been added!');
        
    }
    public function updateOrder(Request $request){
        foreach($request->order as $key => $order){
               $homeorder = DB::table('homepage')->where('id', ($order['id']))
               ->update(['order' => $order['order']]);
        }

        return response('Update Successfully.', 200);
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
        $home = DB::table('homepage')->where('id', $id)->get();
        $home = $home[0];

        return view('admin.home.edit', compact('home'));
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
          if ($request->has('section_image')) {
            $photo = $request->file('section_image');
            $newPhoto = time() . $photo->getClientOriginalName();
            $photo->move('images/homepage', $newPhoto);
            DB::table('homepage')
                ->where('id', $id)
                ->update([
                    'section_image' => $newPhoto,
                ]);
        }
            $about = DB::table('homepage')
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
            ->route('homepage-index')
            ->with('message', 'HomePage section has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = DB::table('homepage')
            ->where('id', $id)
            ->delete();
        return response()->json([
            'message' => 'Home section deleted successfully',
        ]);
    }
      public function Order(Request $request){
        foreach ($request->order as $key => $order) {
            $home = DB::table('homepage')->find($order['id'])->update(['order' => $order['order']]);
        }

        return response('Update Successfully.', 200);
    }
}
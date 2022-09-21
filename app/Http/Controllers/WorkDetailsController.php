<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class WorkDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($work_id)
    {
        $work = DB::table('work_details')
            // ->join('work', 'work.id', '=', 'work_details.work_id')
            ->where('work_id', '=', $work_id)
            ->get();
            // return $work;
            $our_work =  DB::table('work')
            ->where('id', '=', $work_id)
            ->get();
           
         
        return view('admin.work-details.index', compact('work', 'work_id','our_work'));
    }
    public function create($work_id)
    {

    return view('admin.work-details.create', compact('work_id'));
    }

    public function store($work_id, Request $request)
    {
         $photo = $request->file('image');
        $newPhoto = time() . $photo->getClientOriginalName();
        $photo->move('images/work/', $newPhoto);

        $work = DB::table('work_details')->insert([
            'work_id' => $request->work_id,
            'content' => $request->content,
            'youtube' => $request->youtube,
            'vimeo' => $request->vimeo,
            'image' => $newPhoto,
            'project_detail_type' => $request->type,
            'display_order' => $request->display_order,

            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // return \Redirect::back()->with(
        //     'message',
        //     'Work detail has been added!'
        // );
        return  redirect()->route('work-details-index',$work_id)->with(['message'=>'Work detail has been added!']);

    }
       public function edit($work_id,$id)
    {
        $work = DB::table('work_details')
            // ->join('work', 'work.id', '=', 'work_details.work_id')
            ->where('id',  $id)
            ->get();
            // return $work;
            $work = $work[0];
        return view('admin.work-details.edit', compact('work','work_id'));
    }
       public function update(Request $request,$work_id,$id)
    {
        // return $id;
        if ($request->has('image'))
        {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/work/',$newPhoto);
              $newPhoto = $request->image;
              DB::table('work_details')->where('id', $id)->update([
            'image' => $newPhoto,
              ]);
        }
          

        $work = DB::table('work_details')->where('id', $id)->update([
            'work_id' => $request->work_id,
            'content' => $request->content,
            'youtube' => $request->youtube,
            'vimeo' => $request->vimeo,
            // 'image' => $newPhoto,
            'project_detail_type' => $request->type,
            'display_order' => $request->display_order,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now()
        ]);
        return redirect()
            ->route('work-details-index',$work_id)
            ->with('message', 'Work section has been added!');

        // return \Redirect::back()->with(
        //     'message',
        //     'Work details has been updated!'
        // );
    }

       public function destroy($work_id,$id)
    {
        
        $work = DB::table('work_details')
         ->where('id', $id)
            ->delete();
            
        return response()->json(['message' => 'work Details deleted successfully']);
    }


}
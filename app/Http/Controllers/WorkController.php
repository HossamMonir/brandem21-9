<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $work = DB::table('work')->orderBy('display_order')->get();

        //  $works = DB::table('clients')
        //  ->join('work','work.client_id','=','clients.id')
        //  ->get();
        foreach ($work as $work_) {
            $work_->client = DB::table('clients')->where('id', $work_->client_id)->get()[0];
            $work_->service = DB::table('services')->where('id', $work_->service_id)->get()[0];
        }
        //  return $work;

        //  $service = DB::table('services')
        //  ->join('work','work.service_id','services.id')
        //  ->get();
            //    foreach($service as $service_){
            //         $service_->client = DB::table('clients')->where('id',$service_->client_id)->get()[0];
            //     }
        //  return $service;
        return view('admin.work.index', compact('work'));
    }

    public function create()
    {
        $clients = DB::table('clients')->get();
        $services = DB::table('services')->get();

        return view('admin.work.create', compact('services', 'clients'));
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => ['required'],
        //     'subtitle' => ['required'],
        //     'image' => ['required'],
        //     'image2' => ['required'],
        //     'subtitle' => ['required'],
        //     // 'client' => ['required'],
        //     'client_logo' => ['required'],
        //     'sector' => ['required'],
        //     'region' => ['required'],
        //     'capabilities' => ['required'],
        //     'meta_title' => ['required'],
        //     'meta_description' => ['required'],
        //     'meta_keywords' => ['required'],
        //     'featured' => ['required', 'boolean'],
        //     'display_order' => ['required', 'integer'],
        //     'og_image' => ['required'],
        // ]);
        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/work/', $newPhoto);
        }

        $newPhoto2 = '';
        if ($request->hasFile('image2')) {
            $photo2 = $request->file('image2');
            $newPhoto2 = time().$photo2->getClientOriginalName();
            $photo2->move('images/work/', $newPhoto2);
        }
        $newlogo = '';
        if ($request->hasFile('client_logo')) {
            $logo = $request->file('client_logo');
            $newlogo = time().$logo->getClientOriginalName();
            $logo->move('images/work/', $newlogo);
        }

        $ogImage = $request->file('og_image');
        $newogImage = time().$ogImage->getClientOriginalName();
        $ogImage->move('images/seo/', $newogImage);

        $work = DB::table('work')->insert([
            'title' => $request->title,
            'image' => $newPhoto,
            'image2' => $newPhoto2,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,

            'sector' => $request->sector,
            'region' => $request->region,
            'capabilities' => $request->capabilities,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'og_image' => $newogImage,
            'featured' => $request->featured,
            'display_order' => $request->display_order,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()
            ->route('work-index')
            ->with('message', 'Work section has been added!');

        // return \Redirect::back()->with('message','Work has been added!');
    }

    public function show($work_id)
    {
    }

    public function edit($id)
    {
        $work = DB::table('work')
            ->where('id', $id)
            ->get();
        $work = $work[0];

        $clients = DB::table('clients')->get();
        $services = DB::table('services')->get();

        return view('admin.work.edit', compact('work', 'clients', 'services'));
    }

    public function update(Request $request, $id)
    {
        if ($request->has('image')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/work/', $newPhoto);
            DB::table('work')
            ->where('id', $id)
            ->update([
                'image' => $newPhoto,
            ]);
        }

        if ($request->has('image2')) {
            $photo2 = $request->file('image2');
            $newPhoto2 = time().$photo2->getClientOriginalName();
            $photo2->move('images/work/', $newPhoto2);
            DB::table('work')
            ->where('id', $id)
            ->update([
                'image2' => $newPhoto2,
            ]);
        }

        // if ($request->has('client_logo'))
        // {
        //     $clientLogo = $request->file('client_logo');
        //     $newclientLogo = time().$clientLogo->getClientOriginalName();
        //     $clientLogo->move('images/work/',$newclientLogo);
        //       DB::table('work')
        //     ->where('id', $id)
        //     ->update([
        //         'client_logo' => $newclientLogo,
        //     ]);
        // }

        if ($request->has('og_image')) {
            $ogImage = $request->file('og_image');
            $newogImage = time().$ogImage->getClientOriginalName();
            $ogImage->move('images/seo/', $newogImage);
            DB::table('work')
               ->where('id', $id)
               ->update([
                   'og_image' => $newogImage,
               ]);
        }
        $work = DB::table('work')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                // 'image' => $newPhoto,
                // 'image2' => $newPhoto2,
                'subtitle' => $request->subtitle,
                'content' => $request->content,
                // 'client' => $request->client,
                // 'client_logo' => $newclientLogo,

                'sector' => $request->sector,
                'region' => $request->region,
                'capabilities' => $request->capabilities,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                // 'og_image' => $newogImage,
                'featured' => $request->featured,
                'display_order' => $request->display_order,
                'updated_by' => Auth::id(),
                'updated_at' => Carbon::now(),
            ]);

        return redirect()
            ->route('work-index')
            ->with('message', 'Work section has been added!');
        // return \Redirect::back()->with('message','Work has been updated!');
    }

    public function destroy($id)
    {
        $work = DB::table('work')
            ->where('id', $id)
            ->delete();

        return response()->json(['message' => 'Work deleted successfully']);
    }
}

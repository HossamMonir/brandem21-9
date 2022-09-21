<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = DB::table('services')
            ->orderBy('display_order')
            ->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'text' => ['required'],
            'offer' => ['required'],
            'turnto' => ['required'],
            'image' => ['required'],
            'featured' => ['required', 'boolean'],
            'display_order' => ['required', 'integer'],
        ]);

        $photo = $request->file('image');
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('images/', $newPhoto);

        $services = DB::table('services')->insert([
            'title' => $request->title,
            'image' => $newPhoto,
            'text' => $request->text,
            'offer' => $request->offer,
            'turnto' => $request->turnto,
            'featured' => $request->featured,
            'display_order' => $request->display_order,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //   dd($services);
        //   return json_encode($services);
        return redirect()
            ->route('services-index')
            ->with('message', 'Services section has been added!');

        // return \Redirect::back()->with('message','Service has been added!');
    }

    public function show($id)
    {
        $service = DB::table('services')
            ->where('id', $id)
            ->get();
        $service = $service[0];

        return view('admin.service-details.index', compact('service', 'id'));
    }

    public function edit($id)
    {
        $service = DB::table('services')
            ->where('id', $id)
            ->get();
        $service = $service[0];

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required'],
            'text' => ['required'],
            'offer' => ['required'],
            'turnto' => ['required'],
            'featured' => ['required', 'boolean'],
            'display_order' => ['required', 'integer'],
        ]);

        if ($request->has('image')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/', $newPhoto);
            DB::table('services')
                ->where('id', $id)
                ->update([
                    'image' => $newPhoto,
                ]);
        }
        $service = DB::table('services')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                // 'image' => $newPhoto,
                'text' => $request->text,
                'offer' => $request->offer,
                'turnto' => $request->turnto,
                'featured' => $request->featured,
                'display_order' => $request->display_order,
                'updated_by' => Auth::id(),
                'updated_at' => Carbon::now(),
            ]);

        // return \Redirect::back()->with('message','Service has been updated!');
        return redirect()
            ->route('services-index')
            ->with('message', 'Services section has been added!');
    }

    public function destroy($id)
    {
        $services = DB::table('services')
            ->where('id', $id)
            ->delete();

        return response()->json(['message' => 'Service deleted successfully']);
    }
}

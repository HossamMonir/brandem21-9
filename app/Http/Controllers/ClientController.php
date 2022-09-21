<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::table('clients')->get();

        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'client_name' => 'required',
            'image' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        $photo = $request->file('image');
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('images/client/', $newPhoto);

        $client = DB::table('clients')->insert([
            'name' => $request->client_name,
            'logo' => $newPhoto,
            'email' => $request->email,
            'phone' => $request->phone,
            'projects' => $request->projects,
        ]);

        return redirect()
                ->route('client-index')
                ->with('message', 'Client has been added!');
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
        $client = DB::table('clients')->where('id', $id)
            ->get();
        $client = $client[0];

        return view('admin.client.edit', compact('client'));
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
        // $this->validate($request,[
        //     'client_name'=>'required',
        //     'email'=>'required',
        //     'phone'=>'required',
        // ]);
        if ($request->has('logo')) {
            $photo = $request->file('image');
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/client/', $newPhoto);
            DB::table('clients')
             ->where('id', $id)
            ->update([
                'logo' => $photo,
            ]);
        }
        $client = DB::table('clients')
              ->where('id', $id)
              ->update([
                  'name' => $request->client_name,
                  'email' => $request->email,
                  'phone' => $request->phone,
                  'projects' => $request->projects,

              ]);

        return redirect()
            ->route('client-index')
            ->with('message', 'Client has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = DB::table('clients')
            ->where('id', $id)
            ->delete();

        return response()->json(['message' => 'client deleted successfully']);
    }
}

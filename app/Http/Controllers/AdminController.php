<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $site_views = DB::table('site_views')->get();

        return view('admin.index', compact('site_views'));
    }

    public function settings()
    {
        $settings = DB::table('settings')->where('id', '1')->get();
        $settings = $settings[0];

        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $settings = DB::table('settings')->where('id', '1')->update([
            'contact_email' => $request->contact_email,
            'contact_tel' => $request->contact_tel,
            'contact_phone' => $request->contact_phone,
            'contact_address' => $request->contact_address,
            'contact_latitude' => $request->contact_latitude,
            'contact_longitude' => $request->contact_longitude,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'pinterest' => $request->pinterest,
            'twitter' => $request->twitter,
            'vimeo' => $request->vimeo,
            'snapchat' => $request->snapchat,
            'tiktok' => $request->tiktok,
            'flickr' => $request->flickr,
            'tumblr' => $request->tumblr,
            'github' => $request->github,
            'googleplus' => $request->googleplus,
            'google_analytics_code' => $request->google_analytics_code,
            'facebook_pixel_code' => $request->facebook_pixel_code,
            'description' => $request->description,

            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);

        return \Redirect::back()->with('message', 'Settings have been updated!');
    }
}

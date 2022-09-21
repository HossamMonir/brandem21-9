<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;

use SEO;
use SEOMeta;

class PagesController extends Controller
{
    // variables used in all website
    public function __construct()
    {
        
        app()->singleton('contact', function(){
            $settings = DB::table('settings')->where('id','1')->get();
            return $settings[0];
        });
    }

    //Function to set seo dynamically
    public function setSeo($page_data)
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type','article');  
        SEO::twitter()->setSite('@'.app('contact')->twitter);

        if($page_data->og_image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/images/seo/'.$page_data->og_image); 
    }

    public function index()
    {
        $page_data = DB::table('pages')->where('id','1')->get();
        $this->setSeo($page_data[0]);

        $slider = DB::table('slider_images')->orderBy('display_order')->get();
        // foreach($slider as $s) {
        //     if($s->video)
        //          $video = $s->video;
        //    else $video = '';
        // }
        $homepages = DB::table('homepage')->where('featured','1')->orderBy('display_order')->get();
        
        $work = DB::table('work')->where('featured','1')->orderBy('display_order')->get();
        $services = DB::table('services')->where('featured','1')->orderBy('display_order')->get();
        $clients = DB::table('clients')->get();

        return view('index', compact('slider','homepages','work','services','clients'));
    }

    public function about()
    {
        $page_data = DB::table('pages')->where('id', '2')->get();
        $this->setSeo($page_data[0]);

        $about = DB::table('about')->get();

        return view('about-us', compact('page_data','about'));
    }

    public function services()
    {
        $page_data = DB::table('pages')->where('id', '3')->get();
        $this->setSeo($page_data[0]);

        $services = DB::table('services')->orderBy('display_order')->get();

        return view('our-services', compact('page_data','services'));
    }

    public function serviceDetails($id){
        $service = DB::table('services')->where('id',$id)->get();
        $service= $service[0];
        // return $details;
        $details = DB::table('svdetails')->where('svdetails.service_id',$id)->get();
        $works = DB::table('work')->orderByDesc('display_order')->get();
        return view('our-services-details', compact('works','details','service'));
        
    }

    public function work()
    {
        $page_data = DB::table('pages')->where('id', '4')->get();
        $this->setSeo($page_data[0]);

        $works = DB::table('work')->orderByDesc('display_order')->get();

        $services = DB::table('services')->orderBy('display_order')->get();
        foreach($services as $service){
            $service->works = DB::table('work')->where('service_id',$service->id)->orderByDesc('display_order')->get();
        }
        // return $services;
           
        // return $works;
        return view('our-work', compact('page_data','works','services'));
    }




    public function workDetails($work_id)
    {
        $work = DB::table('work')->where('id', $work_id)->get();
                foreach($work as $work_){
                 $work_->client = DB::table('clients')->where('id',$work_->client_id)->get()[0];
                }
                //   dd($work);
            // return $work;
            
        $details = DB::table('work_details')->where('work_details.work_id',$work_id)->get();
        $work = $work[0];
         $work = json_encode($work);
        $next = DB::table('work')->where('id','>', $work_id)->get();
       
        // if($next->count()>0)
        //     $next = $next[0];
        $prev = DB::table('work')->where('id','<', $work_id)->get();
        //  dd($prev);
        // if($next->count()>0)
        //      $prev = $prev[0];
        // return $work;
        return view('our-work-details', compact('work','details'));
    }

    public function blog()
    {
        $page_data = DB::table('pages')->where('id', '6')->get();
        $this->setSeo($page_data[0]);

        $blog = DB::table('blog')->orderBy('display_order')->get();

        return view('blog', compact('page_data','blog'));
    }

    public function blogDetails($blog_id)
    {
        $article = DB::table('blog')->where('id', $blog_id)->get();
        $this->setSeo($article[0]);

        return view('blog-details', compact('page_data','article'));
    }

    public function getInTouch()
    {
        $page_data = DB::table('pages')->where('id', '5')->get();
        $this->setSeo($page_data[0]);

        $services = DB::table('services')->orderBy('display_order')->get();

        return view('get-in-touch', compact('page_data', 'services'));
    }
   
    public function sendMail(Request $request){

        $this->validate($request, [
			'first_name' => 'required',
			'last_name' => 'required',
            'email' =>'required|email',
			'telephone' =>'required',
        ]);

        $data = array(

			'email' => $request->email,
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'telephone' => $request->telephone,
			'company' => $request->company,
			'title' => $request->title,
			'anything_else' => $request->anything_else,
			
			);

            Mail::send('contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('joudy.nabo@gmail.com');
			$message->subject($data['title']);
		});

		Session::flash('success', 'Your Email was Sent!');
    
		return redirect('/');
    }


}
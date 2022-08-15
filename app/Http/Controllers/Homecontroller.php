<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function index(){

      $getallservice = \App\Models\Service::where('status',1)->get();
      $getallblog = \App\Models\Blog::where('status',1)->get();
      $getalltestimonial = \App\Models\Testimonial::where('status',1)->get();
      $getallfooter = \App\Models\Footer::where('status',1)->get();
      $getallsocial = \App\Models\Socialmedia::where('status',1)->get();
      $getsetting = \App\Models\Setting::where('status',1)->first();

      return view('index',compact('getallservice','getallblog','getalltestimonial','getallfooter','getallsocial','getsetting'));
    }

    public function savecreate(Request $request){
     
     $obj = new \App\Models\Newslater;
     $obj->email = $request->email;

     $obj->save();
   
     return redirect()->route('homepage');

    }

    
} 

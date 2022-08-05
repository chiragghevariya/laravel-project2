<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testimonialcontroller extends Controller
{
    //
    public function listing(){

     $getalltestimonial = \App\Models\Testimonial::get();

    	return view('testimonial.listing-testimonial',compact('getalltestimonial'));
    }

    public function create(){


    	return view('testimonial.add-testimonial');
    }

    public function savecreate(Request $request){

     $obj = new \App\Models\Testimonial;
     $obj->title = $request->title;
     $obj->description = $request->description;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
    	return redirect()->route('testimonial.listing-testimonial'); 
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testimonialcontroller extends Controller
{
    //
    public function listing(){

     $getalltestimonial = \App\Models\Testimonial::simplepaginate(4);

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

     public function edit($parameter){

      $editdata = \App\Models\Testimonial::where('id',$parameter)->firstOrfail();

    	return view('testimonial.edit-testimonial',compact('editdata'));
    }

    public function update(Request $request){
      
     $obj =  \App\Models\Testimonial::where('id',$request->testimonial)->first();
     $obj->title = $request->title;
     $obj->description = $request->description;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
     
    	return redirect()->route('testimonial.listing-testimonial');
    
    }

    public function delete($parameterid){

     $obj =  \App\Models\Testimonial::where('id',$parameterid)->first();
     $obj->delete();
     
    	return redirect()->route('testimonial.listing-testimonial');
    }

    
}

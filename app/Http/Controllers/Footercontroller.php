<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Footercontroller extends Controller
{
    //

    public function listing(){
        
        $getallfooter = \App\Models\Footer::simplepaginate(4);

    	return view('footer.listing-footer',compact('getallfooter')); 
    }

    public function create(){

    	return view('footer.add-footer'); 
    }

    public function savecreate(Request $request){
 
         $obj = new \App\Models\Footer;
         $obj->title = $request->title;
         $obj->link = $request->link;
         $obj->status = $request->status;
        
         $obj->save();
    	return redirect()->route('footer.listing-footer'); 
    }

    public function edit($parameter){

        $editdata =  \App\Models\Footer::where('id',$parameter)->firstOrfail();

    	return view('footer.edit-footer',compact('editdata')); 
    }

    public function update(Request $request){
 			
		 $obj = \App\Models\Footer::where('id',$request->footer)->first();
         $obj->title = $request->title;
         $obj->link = $request->link;
         $obj->status = $request->status;
        
         $obj->save();
    	return redirect()->route('footer.listing-footer'); 
    }

    public function delete($parameterid){

             $obj = \App\Models\Footer::where('id',$parameterid)->first();
             $obj->delete();
         	return redirect()->route('footer.listing-footer'); 
    }


}

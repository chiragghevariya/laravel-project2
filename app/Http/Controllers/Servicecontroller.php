<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servicecontroller extends Controller
{
    //

    public function listing(){
        
        $getallservice = \App\Models\Service::simplepaginate(4);
    	return view('service.listing-service',compact('getallservice')); 
    }

    public function create(){

    	return view('service.add-service'); 
    }

    public function savecreate(Request $request){
     
     $obj = new \App\Models\Service;
     $obj->icon = $request->icon;
     $obj->title = $request->title;
     $obj->description = $request->description;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
    	return redirect()->route('service.listing-service'); 
    }

    public function edit($parameter){
 
      $geteditdata = \App\Models\Service::where('id',$parameter)->firstOrfail();

        return view('service.edit-service',compact('geteditdata')); 
    }

     public function update(Request $request){
     
     $obj =  \App\Models\Service::where('id',$request->service)->first();
     $obj->icon = $request->icon;
     $obj->title = $request->title;
     $obj->description = $request->description;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
        return redirect()->route('service.listing-service'); 
    }

    public function delete($parameterid){
 
      $obj = \App\Models\Service::where('id',$parameterid)->first();
      $obj->delete();
        return redirect()->route('service.listing-service'); 
    }
}

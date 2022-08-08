<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Socialmediacontroller extends Controller
{
	//
    public function listing(){
     
      $getallsocial = \App\Models\Socialmedia::simplepaginate(4);

     return view('social.listing-social',compact('getallsocial'));

    }

    public function create(){
     
     return view('social.add-social');

    }

    public function savecreate(Request $request){

     $obj = new \App\Models\Socialmedia;
     $obj->title = $request->title;
     $obj->link = $request->link;
     $obj->icon = $request->icon;
     $obj->status = $request->status;

     $obj->save();

     return redirect()->route('social.listing-social');

    }

    public function edit($parameter){
     
     $geteditdata =  \App\Models\Socialmedia::where('id',$parameter)->firstOrfail();

     return view('social.edit-social',compact('geteditdata'));

    }

     public function update(Request $request){

     $obj =  \App\Models\Socialmedia::where('id',$request->social)->first();
     $obj->title = $request->title;
     $obj->link = $request->link;
     $obj->icon = $request->icon;
     $obj->status = $request->status;

     $obj->save();

     return redirect()->route('social.listing-social');

    }


    public function delete($parameterid){
     
     $obj =  \App\Models\Socialmedia::where('id',$parameterid)->first();
     $obj->delete();

       return redirect()->route('social.listing-social');

    }
}

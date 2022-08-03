<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newslatercontroller extends Controller
{
    //
    public function listing(){
        
        $getnewsdata =  \App\Models\Newslater::simplepaginate(5);
    	return view('news-later.listing-newslater',compact('getnewsdata'));
    }
   
    public function create(){
         
    	return view('news-later.add-form');
    }

    public function savecreate(Request $request){

       $obj = new \App\Models\Newslater;
       $obj->email = $request->email;
       $obj->save();

    	return redirect()->route('newslater.listing-newslater');
    }

    public function edit($paramater){

      $editdata = \App\Models\Newslater::where('id',$paramater)->firstOrfail();

    	return view('news-later.edit-news',compact('editdata'));
    }

    public function update(Request $request){

      $obj = \App\Models\Newslater::where('id',$request->newslater)->first();
      $obj->email = $request->email;
      $obj->save();

    	return redirect()->route('newslater.listing-newslater');
    }

    public function delete($paramaterid){

      $obj = \App\Models\Newslater::where('id',$paramaterid)->first();
      $obj->delete();

    	return redirect()->route('newslater.listing-newslater');
    }
}

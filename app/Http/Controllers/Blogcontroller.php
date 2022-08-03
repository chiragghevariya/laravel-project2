<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    //
    public function create(){

    	return view('blog.blog-form');
    }

    public function savecreate(Request $request){
        
     $obj = new \App\Models\Blog;
     $obj->title = $request->title;
     $obj->description = $request->description;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
    	return redirect()->route('blog.listing-blog');
    }

    public function listing(){
       
       $getallblog = \App\Models\Blog::simplepaginate(5);

        return view('blog.listing',compact('getallblog'));
    }

    public function edit($parameter){
       
       $geteditdata = \App\Models\Blog::where('id',$parameter)->firstOrfail();

        return view('blog.edit-blog',compact('geteditdata'));
    }

    public function update(Request $request){
        
     $obj = \App\Models\Blog::where('id',$request->blog)->first();
     $obj->title = $request->title;
     $obj->description = $request->description;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
        return redirect()->route('blog.listing-blog');
    }

    public function delete($parameterID){

     $obj = \App\Models\Blog::where('id',$parameterID)->first();
     $obj->delete();

     return redirect()->route('blog.listing-blog');
}
}

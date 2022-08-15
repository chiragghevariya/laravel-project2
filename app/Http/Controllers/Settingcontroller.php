<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Settingcontroller extends Controller
{
    //

    public function create(){

    	$editdata = \App\Models\Setting::first();

    	return view('setting.form',compact('editdata'));
    }

    public function update(Request $request){
 
     $obj = \App\Models\Setting::first();
     $obj->copyright = $request->copyright;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();
        return redirect()->route('setting.add');
    }

    
}

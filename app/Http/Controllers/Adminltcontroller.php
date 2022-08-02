<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminltcontroller extends Controller
{
    //
    public function index(){

    	return view('adminit.listing');
    }
}

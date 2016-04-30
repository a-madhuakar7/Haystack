<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestingController extends Controller
{
    //

    public function test()
    {
    	return view('pages.testing'); 
    }
}

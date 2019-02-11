<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class playersfeeController extends Controller
{
    public function playerfee(){
		return view ('admin.playerfee');
	}
}

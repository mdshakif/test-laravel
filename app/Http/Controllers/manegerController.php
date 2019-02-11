<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manegerController extends Controller
{
    public function maneger(){
		return view ('admin.allmaneger');
	}
}

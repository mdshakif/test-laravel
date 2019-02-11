<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comillaController extends Controller
{
    public function comilla(){
		return view ('admin.comilla');
	}
}
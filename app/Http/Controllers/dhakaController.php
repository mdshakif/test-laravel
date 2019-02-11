<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dhakaController extends Controller
{
    public function dhaka(){
    	$dh_allplayers_info=DB::table('player_tbl')
    	->where(['player_selecttem'=>1])
     	->get();
     	
     	$manage_player=view('admin.dhaka')
     	-> with('dhaka_player_info',$dh_allplayers_info);
     	return view('layout')
     	->with('dhaka',$manage_player);
     	return view('admin.dhaka');
		// return view ('admin.dhaka');
	}
}

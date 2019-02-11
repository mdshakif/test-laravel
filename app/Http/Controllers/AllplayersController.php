<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllplayersController extends Controller
{
     public function allplayers(){
     	$allplayers_info=DB::table('player_tbl')
     	->get();
     	$manage_player=view('admin.allplayers')
     	-> with('all_player_info',$allplayers_info);
     	return view('layout')
     	->with('allplayers',$manage_player);
		//return view ('admin.allplayers');
	}
}

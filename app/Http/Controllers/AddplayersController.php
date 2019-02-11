<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddplayersController extends Controller
{
    //
    public function addplayers(){
    	return view ('admin.addplayers');

    }
     public function saveplayer(Request $request){


    	$data=array();
    	$data['player_name']=$request->player_name;
    	$data['player_password']=md5($request->player_password);
    	$data['player_country']=$request->player_country;
    	$data['player_address']=$request->player_address;
    	$data['player_yer']=$request->player_yer;
    	$data['player_role']=$request->player_role;
    	$data['player_selecttem']=$request->player_selecttem;
    	$data['player_email']=$request->player_email;

    	$image=$request->file('player_image');
    	 if ($image) {
    	 	$image_name=str_random(20);
    	 	$ext=strtolower($image->getClientoriginalExtension());
    	 	$image_full_name=$image_name.'.'.$ext;
    	 	$upload_path='image/';
    	 	$image_url=$upload_path.$image_full_name;
    	 	$success=$image->move($upload_path,$image_full_name);
    	 	if ($success) {
    	 		$data['player_image']=$image_url;
    	 		DB::table('player_tbl')->insert($data);
    	 		Session::put('message','player successfull!!');
    	 		return Redirect::to('/addplayers')->with('status', 'New Player Added successfully');
    	 		# code...
    	 	}
    	 	# code...
    	 }
    	 // $data['image']='http://sow.com/db.png';
    	 DB::table('player_tbl')->insert($data);
    	 return Redirect::to('/addplayers');

    	  // $data['image']=$image_url;
    	 DB::table('player_tbl')->insert($data);
    	 return Redirect::to('/addplayers');
    	 




    }
}

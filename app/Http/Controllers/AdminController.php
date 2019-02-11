<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AdminController extends Controller
{
	public function admin_dashboard(){
		return view ('admin.dashboard');
	}
    //view profile
    public function viewprofile(){
        return view ('admin.view');
    }
    //setting
    public function setting(){
        return view ('admin.setting');
    }
     
//lougout
    public function logout()
    {
        Session::put('a_name',null);
        Session::put('a_id',null);
        return Redirect::to ('/backend');
    }


//login dashboard start
    public function login_dashboard(Request $request)
    {
    	// return view ('admin.dashboard');
    	$email=$request->a_email;
    	$password=md5($request->a_password);
    	$result = DB::table('admin_tbl')
    	->where('a_email',$email)
    	->where('a_password',$password)
    	->first();

    	// echo "</pre>";
    	// print_r($result);
    	if ($result) {
    		Session::put('a_email',$result->a_email);
    		Session::put('a_password',$result->a_password);
    		  return Redirect::to('/admin_dashboard');
    		// echo "true";
    		

    		# code...
    	}
    	else{
    		// echo "false";
    		Session::put('exception','email or password invalid');
    		 return Redirect::to('/backend');
    	}
    }
}


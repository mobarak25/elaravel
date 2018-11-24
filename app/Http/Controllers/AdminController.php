<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class AdminController extends Controller{
    public function index(){
    	return view('admin_login');
    }

    public function show_dashboard(){
    	return view('admin.dashboard');
    }

    public function dashboard(Request $request){
    	//dd($request->all());

    	$admin_email    = $request->admin_email;
    	$admin_password = md5($request->admin_password);

		$result         = DB::table('tbl_admin')
						->where('admin_email',$admin_email)
						->where('admin_password',$admin_password)
						->first();
		if($result){
			Session::put('admin_name', $result->admin_name);
			Session::put('admin_id', $result->admin_id);
			Session::put('admin_phone', $result->admin_phone);

			return redirect('/dashboard');
			/*
				N.B: I am loging Dashboard with 3 parameter
				(admin_name,admin_id,admin_phone) But I show
				only admin name in dash board ;
			*/
		}else{
			Session::put('message','Email And Password Invalid');
			return redirect('/admin');
		}
    }
}

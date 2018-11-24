<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SuperAdminController extends Controller{

    public function logout(){

    	/*Session::put('admin_name', Null);
    	Session::put('admin_id', Null);
    	Session::put('admin_phone', Null);*/

    	/*
			N.B:  Session flush is better way then destroing one by one like top section (flush destroy the all parametar);
    	*/
    	Session::flush();

    	return redirect('/admin');
    }
}

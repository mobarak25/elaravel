<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class CheckoutController extends Controller{
    public function login_check(){
    	return view('pages.login');
    }

    public function customer_registration(Request $request){
    	$data = [];
    	$data['customer_name']   = $request->customer_name;
    	$data['customer_email']  = $request->customer_email;
    	$data['password']        = md5($request->password);
    	$data['mobile_number']   = $request->mobile_number;

    	$customer_id = DB::table('tbl_customer')->insertGetId($data);

    	Session::put('customer_id', $customer_id);
    	Session::put('customer_name', $request->customer_name);
    	return redirect('checkout');
    	
    }

    public function checkout(){
    	return view('pages.checkout');
    }
}

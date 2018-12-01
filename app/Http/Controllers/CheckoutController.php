<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
session_start();

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


    public function save_shipping_details(Request $request){
        $data = [];
        $data['shipping_email']          = $request->shipping_email;
        $data['shipping_first_name']     = $request->shipping_first_name;
        $data['shipping_last_name']      = $request->shipping_last_name;
        $data['shipping_address']        = $request->shipping_address;
        $data['shipping_mobile_number']  = $request->shipping_mobile_number;
        $data['shipping_city']           = $request->shipping_city;

        $shippint_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id',$shippint_id);
        Cart::destroy();

        return view('/payment');
    }


    public function logout_customer(){
        Session::flush();
        return redirect('/login-check');
    }


    public function customer_login(Request $request){
        $customer_email    = $request->customer_email;
        $customer_password = md5($request->password);
        $check_customer = DB::table('tbl_customer')
                        ->where('customer_email',$customer_email)
                        ->where('password',$customer_password)
                        ->first();

        if($check_customer){
            Session::put('customer_id',$check_customer->customer_id);
            Session::put('customer_name',$check_customer->customer_name);
            return redirect('/checkout');
        }else{
            return redirect('/login-check')->with('logInMsg','Invalid Email Or Password');
        }
    }
    
}

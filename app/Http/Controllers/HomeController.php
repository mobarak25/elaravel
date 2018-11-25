<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends MyController{
    public function index(){

    	return view('pages.home_content');
    }

    public function product_by_category($id){
        return view('pages.product_by_category');

    }
}

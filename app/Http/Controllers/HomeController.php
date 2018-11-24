<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends MyController{
    public function index(){

    	return view('pages.home_content')->with(
            [
            
               'categories'=> $this->get_category(),
               'menufactures'=> $this->get_manufacture(),
               'products'=> $this->get_allproduct('publishedOnly'),
            ]
        );
    }
}

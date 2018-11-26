<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends MyController{
  
    public function index(){
    	return view('pages.home_content');
    }

    public function product_by_category($id){
        $products = DB::table('tbl_products')
                  ->where('tbl_products.category_id',$id)
                  ->limit(18)
                  ->get();
        
        return view('pages.product_by_category',['products'=>$products]);
    }

    public function product_by_manufacture($id){
        $manefacturs = DB::table('tbl_products')
                  ->where('tbl_products.menufacture_id',$id)
                  ->limit(18)
                  ->get();
        
        return view('pages.product_by_manufacture',['manefacturs'=>$manefacturs]);
    }


}

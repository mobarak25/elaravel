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

    public function view_product($id){
        $product = DB::table('tbl_products')
                  ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                  ->join('tbl_manufacture','tbl_products.menufacture_id','=','tbl_manufacture.manufacture_id')
                  ->select('tbl_products.*', 'tbl_category.category_name as catName','tbl_manufacture.manufacture_name as mName')
                  ->where('tbl_products.category_id',$id)
                  ->first();

        $productSlides = DB::table('tbl_products')->get();
        


        return view('pages.view_product',compact('product','productSlides'));
    }






}

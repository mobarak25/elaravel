<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class CartController extends Controller{

    public function add_to_cart(Request $request){
    	$qty = $request->qty;
    	$product_id = $request->product_id;
    	$product_info = DB::table('tbl_products')
    				  ->where('product_id',$product_id)->first();

    	$data['qty']              = $qty;
    	$data['id']               = $product_info->product_id;
    	$data['name']             = $product_info->product_name;
    	$data['price']            = $product_info->product_price;
    	$data['options']['image'] = json_decode($product_info->product_image)[0];

    	
    	// print_r($data);
    	// exit();
    	//Cart::destroy();
    	Cart::add($data);


    	//echo "<pre>";
    	//print_r(Cart::content());die();



    	return redirect('/show-cart');
    }

    public function show_cart(){
    	$all_published_category = DB::table('tbl_category')
    							->where('publication_status',1)
    							->get();
    	return view('pages.add_to_cart')->with('all_published_category',$all_published_category);
    }

    public function delete_cart($id){
        Cart::update($id, 0);

        return redirect('/show-cart');
    }



}

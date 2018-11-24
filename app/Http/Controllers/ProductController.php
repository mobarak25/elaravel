<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends MyController{

	public function index(){
		return view('/admin.add_product')->with(
			[
				'categories' =>$this->get_category(),
				'menufactures' =>$this->get_manufacture()
			]
		);
	}


	public function save_product(Request $request){

		$img = $this->get_image('elaravel_image', $request->file('product_image'));
		$data = array();

		$data['product_name']              = $request->product_name;
		$data['category_id']               = $request->category_id;
		$data['menufacture_id']            = $request->menufacture_id;
		$data['product_short_description'] = $request->product_short_description;
		$data['product_long_description']  = $request->product_long_description;
		$data['product_price']             = $request->product_price;
		$data['product_image']             = $img;
		$data['product_size']              = $request->product_size;
		$data['product_color']             = $request->product_color;
		$data['publication_status']        = $request->publication_status;

		DB::table('tbl_products')->insert($data);
		return redirect('/add-product')->with('message','Product Inserted Successfully!');
	}


	public function all_product(){
		return view('admin.all_product',['products'=>$this->get_allproduct('all')]);
	} 


	public function product_status($id){
		$getRow = DB::table('tbl_products')
				->where('product_id',$id)
				->value('publication_status');
		$changeStatus = ($getRow == 1)? 0:1;

		DB::table('tbl_products')->where('product_id',$id)->update(['publication_status'=> $changeStatus]);
		return redirect('/all-product');
	} 


	public function delete_product($id){
		DB::table('tbl_products')->where('product_id',$id)->delete();
		return redirect('/all-product');
	}


	public function edit_product($id){
		$product = DB::table('tbl_products')->where('product_id',$id)->first();
		return view('/admin.edit_product',['product'=>$product]);

	}


}

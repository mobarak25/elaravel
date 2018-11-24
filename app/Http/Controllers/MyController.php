<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class MyController extends Controller{

	protected function get_category(){
		$categories = DB::table('tbl_category')
    				->where('publication_status',1)
    				->get();

    	return $categories;
	}

	protected function get_manufacture(){
    	$menufactures = DB::table('tbl_manufacture')
    				  ->where('publication_status',1)
    				  ->get();

    	return $menufactures;
	}

	protected function get_allproduct($publishedOnly){

		if( $publishedOnly == 'publishedOnly' ){
    	$products = DB::table('tbl_products')
    			  ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
    			  ->join('tbl_manufacture','tbl_products.menufacture_id','=','tbl_manufacture.manufacture_id')
    			  ->select('tbl_products.*', 'tbl_category.category_name as catName','tbl_manufacture.manufacture_name as mName')
    			  ->where('tbl_products.publication_status',1)

    			  ->limit(9)
    			  ->get();
    	}else{

    	$products = DB::table('tbl_products')
    			  ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
    			  ->join('tbl_manufacture','tbl_products.menufacture_id','=','tbl_manufacture.manufacture_id')
    			  ->select('tbl_products.*', 'tbl_category.category_name as catName','tbl_manufacture.manufacture_name as mName')
    			  ->limit(9)
    			  ->get();

    	}

    	return $products;
	}

    public function get_slider(){
        $sliders = DB::table('tbl_slider')->get();
        return $sliders;
    }

	protected function get_image($folder, $imges){
		$imgURL = array();
		foreach ($imges as $image) {
			$originalImage  = $image->getClientOriginalName();
			$unicImage      = mt_rand().$originalImage;
			$folder         = $folder.'/';
			$movePicture    = $image->move($folder, $unicImage);
			$imgURL[]       = $folder.$unicImage;
		}

    	return json_encode($imgURL);
	}
    
}
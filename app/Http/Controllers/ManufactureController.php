<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ManufactureController extends Controller{
	
    public function index(){
    	return view('admin.add_menufacture');
    }


    public function all_manufacture(){

    	$manufactures = DB::table('tbl_manufacture')->get();
    	return view('admin.all_menufacture',['manufactures'=>$manufactures]);
    }


    public function save_manucature(Request $request){

    	$data = array();
    	$data['manufacture_name'] = $request->manufature_name;
    	$data['manufacture_description'] = $request->manufature_description;
    	$data['publication_status'] = $request->publication_status;

    	DB::table('tbl_manufacture')->insert($data);

    	return redirect('/add-manufacture')->with('message','Menufacture Add Successfully');
    }


    public function manufacture_status($id){

    	$get_row = DB::table('tbl_manufacture')
    			 ->where('manufacture_id',$id)
    			 ->value('publication_status');
    	
    	$get_row = ($get_row == 1) ? 0:1;

    	DB::table('tbl_manufacture')->where('manufacture_id',$id)->update(['publication_status'=>$get_row]);

    	return redirect('/all-manufacture');
    }


    public function edit_manufacture($id){

    	$get_manufacture = DB::table('tbl_manufacture')
    					 ->where('manufacture_id',$id)
    					 ->first();
    	return view('admin.edit_manufacture',['get_manufacture'=>$get_manufacture]);
    }


    public function update_manufacture(Request $request, $id){

    	$data = array();
    	$data['manufacture_name'] = $request->manufacture_name;
    	$data['manufacture_description'] = $request->manufacture_description;

    	DB::table('tbl_manufacture')->where('manufacture_id',$id)->update($data);

    	return redirect('/all-manufacture')->with('message','Manufacture update Sussessfully !!');
    }


    public function delete_manufacture($id){

    	DB::table('tbl_manufacture')->where('manufacture_id',$id)->delete();

    	return redirect('/all-manufacture')->with('delmessage','manufacture Delete Sussessfully !!');
    }





}

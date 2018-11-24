<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SliderController extends Mycontroller{

	public function index(){
		return view('admin.add_slider');

	}

	public function save_slider(Request $request){
		
		$image = $this->get_image('Home_slider',$request->file('slider_image'));

		$data = array();

		$data['slider_title']        =  $request->slider_title;
		$data['slider_subtitle']     =  $request->slider_subtitle;
		$data['slider_description']  =  $request->slider_description;
		$data['slider_image']        =  $image;
		$data['slider_btnlink']      =  $request->btn_link;

		DB::table('tbl_slider')->insert($data);
		return redirect('/add-slider')->with('message','Slider Inserted Successfully.');
	}

	public function all_slider(){
		return view('/admin.all_slider',['sliders'=>$this->get_slider('all')]);
	}

	

	public function slider_status($id){
		$get_row = DB::table('tbl_slider')
                ->where('slider_id',$id)
                ->value('publication_status');
        
        $get_row = ($get_row == 1) ? 0:1;
        DB::table('tbl_slider')->where('slider_id',$id)->update(['publication_status'=>$get_row]);
        return redirect('/all-slider');
	}

	public function delete_slider($id){
		DB::table('tbl_slider')->where('slider_id',$id)->delete();
		return redirect('/all-slider');
	}
    
}

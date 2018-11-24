<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller{


    public function index(){
        return view('admin.add_category');
    }


    public function all_category(){
        $all_category = DB::table('tbl_category')->get();
        return view('admin.all_category',['categories'=>$all_category]);
    }


    public function save_category(Request $request){
        //dd($request->all());
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;
        /*echo "<pre>";
            print_r($data);
        echo "</pre>";*/
        DB::table('tbl_category')->insert($data);
        return redirect('add-category')->with('message','Category Inserted Sussessfully');
    }


    public function category_status($id){
        $get_row = DB::table('tbl_category')
                ->where('category_id',$id)
                ->value('publication_status');
        
        $get_row = ($get_row == 1) ? 0:1;
        DB::table('tbl_category')->where('category_id',$id)->update(['publication_status'=>$get_row]);
        return redirect('/all-category');
    }


    public function edit_category($id){
        $get_category = DB::table('tbl_category')->where('category_id',$id)->first();
        return view('admin.edit_category',['get_category'=>$get_category]);
    }


    public function update_category(Request $request, $id){
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        DB::table('tbl_category')->where('category_id',$id)->update($data);
        return redirect('/all-category')->with('message','Category update Sussessfully !!');
    }


    public function delete_category($id){
        DB::table('tbl_category')->where('category_id',$id)->delete();
        return redirect('/all-category')->with('delmessage','Category Delete Sussessfully !!');
    }


}
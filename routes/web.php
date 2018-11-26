<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Frontend Route................................................................
Route::get('/', 'HomeController@index');
Route::get('/product-by-category/{id}', 'HomeController@product_by_category');









//Backend Route.................................................................
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');


//Category related Route........................................................
Route::get('/add-category', 'CategoryController@index');
Route::get('all-category', 'CategoryController@all_category');
Route::post('/category-asve', 'CategoryController@save_category');
Route::get('/active_unactive_cat/{id}', 'CategoryController@category_status');
Route::get('/edit-category/{id}', 'CategoryController@edit_category');
Route::post('/update-category/{id}', 'CategoryController@update_category');
Route::get('/delete-category/{id}', 'CategoryController@delete_category');

//Manufacture related Route........................................................
Route::get('/add-manufacture', 'ManufactureController@index');
Route::get('/all-manufacture', 'ManufactureController@all_manufacture');
Route::post('/manucature-asve', 'ManufactureController@save_manucature');
Route::get('/active_unactive_cat/{id}', 'ManufactureController@manufacture_status');
Route::get('/edit-manufacture/{id}', 'ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{id}', 'ManufactureController@update_manufacture');
Route::get('/delete-manufacture/{id}', 'ManufactureController@delete_manufacture');

//Product related Route........................................................
Route::get('/add-product', 'ProductController@index');
Route::post('/save-product', 'ProductController@save_product');
Route::get('/all-product', 'ProductController@all_product');
Route::get('/active_unactive_product/{id}', 'ProductController@product_status');
Route::get('/delete-product/{id}', 'ProductController@delete_product');
Route::get('/edit-product/{id}', 'ProductController@edit_product');

//Slider Route................................................................
Route::get('/add-slider', 'SliderController@index');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('/all-slider', 'SliderController@all_slider');
Route::get('/active_unactive_slider/{id}', 'SliderController@slider_status');
Route::get('/delete-slider/{id}', 'SliderController@delete_slider');

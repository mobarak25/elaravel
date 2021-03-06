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
Route::get('/product-by-manufacture/{id}', 'HomeController@product_by_manufacture');
Route::get('/view-product/{id}', 'HomeController@view_product');

//Frontend Cart Route.............................................................
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-cart/{id}', 'CartController@delete_cart');
Route::post('/update-cart', 'CartController@update_cart');

//Frontend checkout Route.........................................................
Route::get('/login-check', 'CheckoutController@login_check');
Route::post('/customer-registration', 'CheckoutController@customer_registration');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save-shipping-details', 'CheckoutController@save_shipping_details');
Route::post('/customer-login', 'CheckoutController@customer_login');
Route::get('/logout-customer', 'CheckoutController@logout_customer');




//Backend Route.................................................................
Route::get('/admin', 'AdminController@index');
Route::get('/logout', 'SuperAdminController@logout');
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

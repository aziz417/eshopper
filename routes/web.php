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
//Frontend controller here ...........................................
Route::get('/','HomeController@index');







//Admin controller here //////////////////////////////////////////
Route::get('/admin/login','Admin\AdminController@admin');
Route::post('/dashboard','Admin\AdminController@login')->name('admin.action');
Route::get('/logout','Admin\SuperAdminController@logout');


//// category brand product controller here/////////////////////////////////////////
Route::get('all/categories','Admin\CategoryController@AllCategories')->name('all.categories');
Route::get('add/category','Admin\CategoryController@AddCategory')->name('add.category');
Route::get('all/brands','Admin\BrandController@AllBrand')->name('all.brands');
Route::get('add/brand','Admin\BrandController@AddBrand')->name('add.brand');
Route::get('all/products','Admin\ProductController@AllProducts')->name('all.products');
Route::get('add/product','Admin\ProductController@AddProduct')->name('add.product');



////Other fetchers control here example slider,menus,site name
Route::get('menus/','Admin\ExtraController@Menu')->name('menu');
Route::get('slider/','Admin\ExtraController@Slider')->name('slider');
Route::get('site.name/','Admin\ExtraController@SiteName')->name('site.name');





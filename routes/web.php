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


//// category, brand, product, controller here/////////////////////////////////////////
Route::get('all/categories','Admin\CategoryController@AllCategories')->name('all.categories');
Route::get('add/category','Admin\CategoryController@AddCategory')->name('add.category');
Route::post('category/store','Admin\CategoryController@CategoryStore')->name('admin.categories.store');
Route::get('category/edit/{id}','Admin\CategoryController@CategoryEdit')->name('category.edit');
Route::post('categories/update','Admin\CategoryController@CategoryUpdate')->name('categories.update');
Route::get('category/delete/{id}','Admin\CategoryController@CategoryDelete')->name('category.delete');
Route::get('status/unactive/{id}','Admin\CategoryController@StatusUnActive')->name('status.unactive');
Route::get('status/active/{id}','Admin\CategoryController@StatusActive')->name('status.active');
Route::get('all/brands','Admin\BrandController@AllBrand')->name('all.brands');
Route::get('add/brand','Admin\BrandController@AddBrand')->name('add.brand');
Route::get('all/products','Admin\ProductController@AllProducts')->name('all.products');
Route::get('add/product','Admin\ProductController@AddProduct')->name('add.product');



////Extra control here example slider,menus,site name
Route::get('menus/','Admin\ExtraController@Menu')->name('menu');
Route::get('slider/','Admin\ExtraController@Slider')->name('slider');
Route::get('site.name/','Admin\ExtraController@SiteName')->name('site.name');





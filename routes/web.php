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
Route::get('/','frontend\HomeController@index');
Route::get('products/category/{id}','frontend\HomeController@productByCategory')->name('product.byCategory');
Route::get('products/brand/{id}','frontend\HomeController@productByBrand')->name('product.byBrand');
Route::get('product/details/{id}','frontend\HomeController@productDetails')->name('product.details');


//// Cart controller here............................................
Route::post('add/card/{id}','frontend\CartController@addToCart')->name('add.ToCart');
Route::get('show/card','frontend\CartController@CartIndex')->name('cart.index');
Route::get('cart/delete/{rowId}','frontend\CartController@CartDeleteSingle')->name('cart.delete.single');


//Admin controller here //////////////////////////////////////////
Route::get('/logout','Admin\SuperAdminController@logout');
Route::get('/backend','Admin\AdminController@index');
Route::get('/dashboard','Admin\SuperAdminController@index');
Route::post('/admin-dashboard','Admin\AdminController@dashboard');



//// categories, brands, products, controller here/////////////////////////////////////////

/// category
Route::get('all/categories','Admin\CategoryController@AllCategories')->name('all.categories');
Route::get('add/category','Admin\CategoryController@AddCategory')->name('add.category');
Route::post('category/store','Admin\CategoryController@CategoryStore')->name('admin.categories.store');
Route::get('category/edit/{id}','Admin\CategoryController@CategoryEdit')->name('category.edit');
Route::post('category/update','Admin\CategoryController@CategoryUpdate')->name('category.update');
Route::get('category/delete/{id}','Admin\CategoryController@CategoryDelete')->name('category.delete');
Route::get('category/status/unactive/{id}','Admin\CategoryController@StatusUnActive')->name('category.status.unactive');
Route::get('category/status/active/{id}','Admin\CategoryController@StatusActive')->name('category.status.active');

/// brand
Route::get('all/brands','Admin\BrandController@AllBrands')->name('all.brands');
Route::get('add/brand','Admin\BrandController@AddBrand')->name('add.brand');
Route::post('brand/store','Admin\BrandController@BrandStore')->name('admin.brands.store');
Route::get('brand/edit/{id}','Admin\BrandController@BrandEdit')->name('brand.edit');
Route::post('brand/update','Admin\BrandController@BrandUpdate')->name('brand.update');
Route::get('brand/delete/{id}','Admin\BrandController@BrandDelete')->name('brand.delete');
Route::get('brand/status/unactive/{id}','Admin\BrandController@StatusUnActive')->name('brand.status.unactive');
Route::get('brand/status/active/{id}','Admin\BrandController@StatusActive')->name('brand.status.active');


/// product
Route::get('all/products','Admin\ProductController@AllProducts')->name('all.products');
Route::get('add/product','Admin\ProductController@AddProduct')->name('add.product');
Route::post('product/store','Admin\ProductController@ProductStore')->name('product.store');
Route::get('product/edit/{id}','Admin\ProductController@ProductEdit')->name('product.edit');
Route::post('product/update','Admin\ProductController@ProductUpdate')->name('product.update');
Route::get('product/delete/{id}','Admin\ProductController@ProductDelete')->name('product.delete');
Route::get('product/status/unactive/{id}','Admin\ProductController@StatusUnActive')->name('product.status.unactive');
Route::get('product/status/active/{id}','Admin\ProductController@StatusActive')->name('product.status.active');
Route::get('product/view/{id}','Admin\ProductController@ProductView')->name('product.view');


////Extra control here example slider,menus,site name
Route::get('menus/','Admin\ExtraController@Menu')->name('menu');
Route::get('slider/','Admin\ExtraController@Slider')->name('slider');
Route::get('site.name/','Admin\ExtraController@SiteName')->name('site.name');





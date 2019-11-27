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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('admin/test/dashboard','Admin\ExtraController@showDashboard')->name('test.dashboard');

Route::get('/','frontend\HomeController@index')->name('/');
Route::get('products/category/{id}','frontend\HomeController@productByCategory')->name('product.byCategory');
Route::get('products/brand/{id}','frontend\HomeController@productByBrand')->name('product.byBrand');
Route::get('product/details/{id}','frontend\HomeController@productDetails')->name('product.details');


//// Cart controller here............................................
Route::post('add/card/{id}','frontend\CartController@addToCart')->name('add.ToCart');
Route::get('show/card','frontend\CartController@CartIndex')->name('cart.index');
Route::get('cart/delete/{rowId}','frontend\CartController@CartDeleteSingle')->name('cart.delete.single');
Route::post('cart/update','frontend\CartController@CartUpdate')->name('cart.update');

//wishlist controller here ///////////////////////////////////////////////////////
Route::get('show/wishlist','frontend\WishlistController@index')->name('show.wishlist');
Route::get('add/wishlist/{Pid}','frontend\WishlistController@addWishlist')->name('add.wishlist');
Route::get('move/ToWishList/{Pid}','frontend\WishlistController@moveToWishList')->name('move.ToWishList');
Route::get('wishList/delete/{rowId}','frontend\WishlistController@WishListDeleteSingle')->name('wishList.delete.single');



////checkout controller here /.........................////////////////////////.
Route::get('/checkLoginShipping','frontend\CheckoutController@checkLoginShipping');

////shipping controller here ..........................................................
Route::get('shipping/check','frontend\ShippingController@ShippingCheck')->name('shipping.check');
Route::post('shipping/store','frontend\ShippingController@SippingStore')->name('shipping.store');



////payment............................................
Route::post('payment','frontend\OrderController@Payment');



/////customer login,singing controller here....................................
Route::post('customer/singing','frontend\CustomerController@CustomerSinging')->name('customer.singing');
Route::post('customer/login','frontend\CustomerController@Customerlogin')->name('customer.login');
Route::get('customer/login','frontend\CustomerController@LoginIndex');
Route::get('customer/logout','frontend\CustomerController@logout');



//Admin controller here //////////////////////////////////////////
Route::get('admin/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
/////multi auth all route list here......................................
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Fs route /////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::GET('admin/home','AdminController@index');
Route::GET('admin','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\Auth\LoginController@login');
Route::get('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

Route::get('admin-password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset','Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');



//order manage controller ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
Route::get('order/manage','Admin\OrderController@OrderManage')->name('order.manage');
Route::get('order/details/{orderId}','Admin\OrderController@OrderDetails')->name('order.details');



//// categories, brands, products, controller here/////////////////////////////////////////

/// category route resource here
Route::resource('category','Admin\CategoryController');
//category status here
Route::get('category/status/unactive/{id}','Admin\CategoryController@StatusUnActive')->name('category.status.unactive');
Route::get('category/status/active/{id}','Admin\CategoryController@StatusActive')->name('category.status.active');

///// brand
Route::get('all/brands','Admin\BrandController@AllBrands')->name('all.brands');
Route::get('add/brand','Admin\BrandController@AddBrand')->name('add.brand');
Route::post('brand/store','Admin\BrandController@BrandStore')->name('admin.brands.store');
Route::get('brand/edit/{id}','Admin\BrandController@BrandEdit')->name('brand.edit');
Route::post('brand/update','Admin\BrandController@BrandUpdate')->name('brand.updated');
Route::get('brand/delete/{id}','Admin\BrandController@BrandDelete')->name('brand.delete');
Route::get('brand/status/unactive/{id}','Admin\BrandController@StatusUnActive')->name('brand.status.unactive');
Route::get('brand/status/active/{id}','Admin\BrandController@StatusActive')->name('brand.status.active');


///// product
Route::get('all/products','Admin\ProductController@AllProducts')->name('all.products');
Route::get('add/product','Admin\ProductController@AddProduct')->name('add.product');
Route::post('product/store','Admin\ProductController@ProductStore')->name('product.store');
Route::get('product/edit/{id}','Admin\ProductController@ProductEdit')->name('product.edit');
Route::post('product/update','Admin\ProductController@ProductUpdate')->name('product.update');
Route::get('product/delete/{id}','Admin\ProductController@ProductDelete')->name('product.delete');
Route::get('product/status/unactive/{id}','Admin\ProductController@StatusUnActive')->name('product.status.unactive');
Route::get('product/status/active/{id}','Admin\ProductController@StatusActive')->name('product.status.active');


////Extra control here example slider,menus,site name
Route::get('menus/','Admin\ExtraController@Menu')->name('menu');


////slider.............................................................
Route::get('slider/','Admin\ExtraController@Index')->name('slider');
Route::get('slider/add','Admin\ExtraController@SliderAdd')->name('slider.add');
Route::post('slider/store','Admin\ExtraController@SliderStore')->name('slider.store');
Route::get('slider/delete/{id}','Admin\ExtraController@SliderDelete')->name('slider.delete');
Route::get('slider/edit/{id}','Admin\ExtraController@SliderEdit')->name('slider.edit');
Route::post('slider/update','Admin\ExtraController@SliderUpdate')->name('slider.update');
Route::get('slider/status/unactive/{id}','Admin\ExtraController@StatusUnActive')->name('slider.status.unactive');
Route::get('slider/status/active/{id}','Admin\ExtraController@StatusActive')->name('slider.status.active');




Route::get('site.name/','Admin\ExtraController@SiteName')->name('site.name');



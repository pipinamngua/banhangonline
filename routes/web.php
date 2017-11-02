<?php
Auth::routes();
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
// Delivery
Route::get('delivery', function(){
	return view('clients.delivery.delivery');
});// News
Route::get('news', function(){
	return view('clients.news.news');
});
// About Us
Route::get('about-us', function(){
	return view('clients.about.about-us');
});
// Contact Us
Route::get('contact-us', 'ContactController@index');
Route::post('contact-us', 'ContactController@store');

Route::get("message" , "MessageController@getMessage" );

// Profile

Route::group(['middleware' => ['auth']], function(){
	Route::get('profile', 'Account\ProfileController@index');
	Route::post('profile/{id}', 'Account\ProfileController@update');
	Route::get('profile/change-password', 'Account\ProfileController@edit');
	Route::post('profile/change-password/{id}', 'Account\ProfileController@changePassword');

	Route::get('profile/orders/', 'Account\OrderController@index');

	Route::get('profile/contacts/', 'Account\ContactController@index');

	Route::get('profile/reviews', 'Account\ReviewController@index');
});
// Product

Route::get('product/{id}', 'HomeController@show');

Route::get('/', 'HomeController@index');
Route::get('product', 'HomeController@searchpage');
Route::get('page-loaisp/{category_id}', 'HomeController@getLoaiSanPham');


Route::get('/list_new_product', 'HomeController@getListNewProduct');

Route::get('/list_discount_product', 'HomeController@getListDiscountProduct');

Route::get('product/{id}/{slug}', 'ProductController@index');
Route::post('product/{id}/{slug}', 'ReviewController@store');

//Compare

Route::post('compare/{id}', 'CompareController@index');

// Middleware Admin
Route::group(['middleware' => ['checkAdmin']], function(){

	//Quan ly product
	Route::get('admin', 'Admin\DashboardController@index');
	Route::get('admin/product', 'Admin\ProductController@index');

	Route::get('admin/product/create', 'Admin\ProductController@create');
	Route::post('admin/product/create', 'Admin\ProductController@store');
	Route::get('admin/product/{id}/edit', 'Admin\ProductController@edit');
	Route::patch('admin/product/{id}', 'Admin\ProductController@update');
	Route::delete('admin/product/{id}', 'Admin\ProductController@destroy');

//Quan ly order
	Route::get('admin/order', 'Admin\OrderController@index');
	Route::get('admin/order/{id}/edit', 'Admin\OrderController@edit');
	Route::patch('admin/order/{id}', 'Admin\OrderController@update');
	Route::delete('admin/order/{id}', 'Admin\OrderController@destroy');
	Route::get('admin/order/detail/{id}','Admin\OrderController@showOrderDetail');
	Route::post('admin/order/deliveried/{id}','Admin\OrderController@deliveried');
	Route::post('admin/order/delivering/{id}','Admin\OrderController@delivering');

// Quan ly User
	Route::get('admin/user/show', 'Admin\UserController@index');
	Route::post('admin/user/upgrade/{id}', 'Admin\UserController@upgrade');
	Route::post('admin/user/downgrade/{id}', 'Admin\UserController@downgrade');
	Route::delete('admin/user/delete/{id}', 'Admin\UserController@destroy');
	Route::get('admin/user/create', 'Admin\UserController@create');
	Route::post('admin/user/create', 'Admin\UserController@store');
	Route::get('admin/user/{id}/edit', 'Admin\UserController@edit');
	Route::PATCH('admin/user/show/{id}', 'Admin\UserController@update');

// Quan ly Contact
	Route::get('admin/contact', 'Admin\ContactController@index');
	Route::get('admin/contact/{id}/edit', 'Admin\ContactController@pending');
	Route::get('admin/contact/edit/{id}', 'Admin\ContactController@processed');

//Quan ly Slide
	Route::get('admin/slide','Admin\SlideController@index');
	Route::get('admin/slide/create','Admin\SlideController@create');
	Route::post('admin/slide/create','Admin\SlideController@store');
	Route::get('admin/slide/{id}/edit','Admin\SlideController@edit');
	Route::patch('admin/slide/{id}','Admin\SlideController@update');
	Route::delete('admin/slide/{id}','Admin\SlideController@destroy');
//Quan ly Order_detail
	Route::get('admin/orderdetail','Admin\OrderDetailController@index');
//Quan ly Message
	Route::get('admin/list-message','Admin\MessageController@index');
});

//Gio hang
	Route::get('cart','Cart\CartController@index');
	Route::get('cart/add/{id}','Cart\CartController@store');
	Route::get('cart/remove/{id}','Cart\CartController@destroy');
	Route::get('cart/clear','Cart\CartController@clear');
	Route::get('cart/updown/{id}/{quantity}','Cart\CartController@updown');
	Route::get('cart/upgrade/{id}/{quntity}','Cart\CartController@upgrade');
	Route::resource('cart/order','Cart\OrderController');
//Chat
	Route::get('send-message', 'Chat\MessageController@index');
	Route::post('send-message','Chat\MessageController@postSendMessage');
	Route::get('test','Chat\MessageController@testing');

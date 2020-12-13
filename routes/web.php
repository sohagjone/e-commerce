<?php

use Illuminate\Support\Facades\Route;

//------------------ Front Interface------------------------------------------ 
Route::get('/', 'FrontInterfaceController@index');

Route::get('/product_details/{id}', 'FrontInterfaceController@product_details')->name('product_details');
Route::get('/shop_page_view', 'FrontInterfaceController@shop_page_view')->name('shop_page_view');
Route::get('/show_product_category/{id}', 'FrontInterfaceController@show_product_category')->name('show_product_category');
//cart
Route::post('/cart/add_product', 'CartController@add_to_cart')->name('add_to_cart');
Route::get('/cart_item_remove/{id}', 'CartController@cart_item_remove')->name('cart_item_remove');
//checkout
Route::get('/checkout-customer', 'CheckoutController@customer_form')->name('customer_form');
Route::post('/checkout-customer', 'CheckoutController@customer_signup')->name('customer_signup');
Route::get('/checkout-shipping', 'CheckoutController@sipping_signup')->name('sipping_signup');
Route::post('/checkout-shipping', 'CheckoutController@shipping_save')->name('shipping_save');
Route::get('/checkout-payment', 'CheckoutController@payment_form')->name('payment_form');
//order
Route::post('/order', 'CheckoutController@order_save')->name('order_save');
Route::get('/order-history', 'CheckoutController@order_history')->name('order_history');
//logout
Route::get('/logout_customer', 'CheckoutController@logout_customer')->name('logout_customer');
//Customer login 
Route::post('/login_customer', 'CustomerController@login_customer')->name('login_customer');


//---------------------------------Admin Interface---------------------------
Route::group(['middleware'=>['AuthCheck']], function(){
//category
Route::get('/category-form', 'CategoryController@category_form')->name('category_form');
Route::post('/category-form', 'CategoryController@category_save')->name('category_save');
Route::get('/manage_category', [
	'uses' =>'CategoryController@manage_category',
	'as' => 'manage_category'
]);
Route::get('/category_unpublish/{id}', [
	'uses' =>'CategoryController@category_unpublish',
	'as' => 'category_unpublish'
]);
Route::get('/category_publish/{id}', [
	'uses' =>'CategoryController@category_publish',
	'as' => 'category_publish'
]);
Route::get('/category_edit/{id}', [
	'uses' =>'CategoryController@category_edit',
	'as' => 'category_edit'
]);
Route::post('/category_update', [
	'uses' =>'CategoryController@category_update',
	'as' => 'category_update'
]);
Route::get('/category_delete/{id}', [
	'uses' =>'CategoryController@category_delete',
	'as' => 'category_delete'
]);
//product
Route::get('/product-form', 'ProductController@product_form')->name('product_form');

Route::post('/product-form', 'ProductController@product_save')->name('product_save');
Route::get('/manage_product', [
	'uses' =>'ProductController@manage_product',
	'as' => 'manage_product'
]);

Route::get('/unpublished_product/{id}', [
	'uses' =>'ProductController@unpublished_product',
	'as' => 'unpublished_product'
]);
Route::get('/published_product/{id}', [
	'uses' =>'ProductController@published_product',
	'as' => 'published_product'
]);
Route::get('/product_edit/{id}', [
	'uses' =>'ProductController@product_edit',
	'as' => 'product_edit'
]);
Route::post('/product_update', [
	'uses' =>'productController@product_update',
	'as' => 'product_update'
]);
Route::get('/product_delete/{id}', [
	'uses' =>'ProductController@product_delete',
	'as' => 'product_delete'
]);
//order
Route::get('/order-manage', [
	'uses' =>'OrderController@order_manage',
	'as' => 'order_manage'
]);
Route::get('/order-details/{order_id}', [
	'uses' =>'OrderController@order_details',
	'as' => 'order_details'
]);
Route::get('/order-invoice/{order_id}', [
	'uses' =>'OrderController@order_invoice',
	'as' => 'order_invoice'
]);

});
Auth::routes();
Route::get('/admin-home', 'HomeController@index')->name('home');
Route::get('/order-invoice-download/{order_id}', [
	'uses' =>'OrderController@order_invoice_download',
	'as' => 'order_invoice_download'
]);
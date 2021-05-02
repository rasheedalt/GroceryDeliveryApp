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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'CustomerController@showLoginform')->name('customer.show_login');
Route::post('/login', 'CustomerController@login')->name('customer.login');
Route::get('/sign-up', 'CustomerController@showSignUpform')->name('customer.show_signup');
Route::post('/sign-up', 'CustomerController@register')->name('customer.signup');
Route::post('/logout', 'CustomerController@logout')->name('customer.logout');

Route::post('/add-to-cart', 'CartController@add')->name('cart.add_product');
Route::get('/remove-from-cart/{cart}', 'CartController@remove')->name('cart.remove');
Route::get('/cart-list', 'CartController@list')->name('cart.list');
Route::get('/delivery-slots', 'CartController@showDeliverySlots')->name('cart.slots');
Route::get('/order_preview/{slot?}', 'CartController@orderPreview')->name('cart.preview');

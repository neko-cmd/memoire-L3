<?php

use Illuminate\Support\Facades\Route;

use App\Order;
use App\Product;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

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


Route::get('/', 'productcontroller@index')->name('products.index');
Route::get('/shop', 'shopcontroller@index')->name('shop.index');
Route::get('/shop/{product}', 'shopcontroller@show')->name('shop.show');
Route::get('/cart', 'cartcontroller@index')->name('cart.index');
Route::Post('/cart', 'cartcontroller@store')->name('cart.store');
Route::get('/checkout', 'checkoutcontroller@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('/search', 'shopcontroller@search')->name('search');
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');
Route::view('/ind', '/products.ind');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

Route::get('empty',function(){
    Cart::instance('saveForLater')->destroy();
});

Route::get('/contact', [
     'as' => 'contact_path',
     'uses' => 'contactscontroller@create'
]);
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'contactscontroller@store'
]);

Auth::routes();

Route::get('/myprofile','Userscontroller@edit')->name('Users.edit');
Route::patch('/myprofile','Userscontroller@update')->name('Users.update');
Route::get('/motpass','passcontroller@edit')->name('pass.edit');
Route::patch('/motpass','passcontroller@update')->name('pass.update');
Route::get('/myorders','orderscontroller@index')->name('orders.index');
Route::get('/apropos','aproposcontroller@index')->name('apropos.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

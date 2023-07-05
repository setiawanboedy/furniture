<?php

use Illuminate\Support\Facades\Route;
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

Route::namespace('App\Http\Controllers')
->group(function(){

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/detail/{slug}', 'ProductDetailController@index')->name('detail');
    Route::get('/product-mebel', 'ProductController@index')->name('product-front');

});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(CartController::class)
    ->group(function(){
        Route::get('cart', 'cartList')->name('cart.list');
        Route::post('cart', 'addToCart')->name('cart.store');
        Route::post('update-cart','updateCart')->name('cart.update');
        Route::delete('remove/{id}','removeCart')->name('cart.remove');
        Route::post('clear', 'clearAllCart')->name('cart.clear');
        Route::post('checkout', 'checkout')->name('cart.checkout');
    });

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(CheckoutController::class)
    ->group(function(){
        Route::get('payment/{trans_id}', 'index')->name('payment.index');
        Route::post('payment', 'upload')->name('payment.store');
    });

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(TransactionUserController::class)
    ->group(function(){
        Route::get('user/transactions', 'index')->name('user-trans.index');

});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(ReviewController::class)
    ->group(function(){
        Route::get('user/transactions/review/{product_id}', 'index')->name('review.index');
        Route::post('user/transactions/review', 'review')->name('review.store');
});

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('product', ProductController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
        Route::resource('suplier-admin', SuplierAdminController::class);
    });

    Route::prefix('suplier')
    ->namespace('App\Http\Controllers\Suplier')
    ->middleware(['auth','suplier'])
    ->group(function(){
        Route::get('/', 'SuplierController@index')->name('suplier.index');
    });

Auth::routes();

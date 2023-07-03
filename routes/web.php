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

// Route::namespace('App\Http\Controllers')
//     ->middleware(['auth','web'])
//     ->controller(TransactionUserController::class)
//     ->group(function(){
//         Route::get('/product/transactions', 'index')->name('transaction-user');
//     });

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('product', ProductController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
    });

Auth::routes();


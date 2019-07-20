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

use App\Product;

Route::resource('/','LoginController');

Route::group(['middleware'=>'LoginChk'],function(){

    Route::get('/dashboard',function(){
       return view('dashboard');
    })->name('dashboard');

    Route::resource('/products','ProductsController');

    Route::resource('/orders','OrdersController');

    Route::resource('/categories','CategoryController');

    Route::resource('/customers','CustomersController');

    Route::resource('/suppliers','SuppliersController');

    Route::resource('/admins','AdminsController');


    Route::get('/logout',['uses'=>'LoginController@logout','as'=>'logout']);
})


?>
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', "App\Http\Controllers\CategoryController@display");
Route::get('/login', function(){
    return view("login");
});
Route::get('/cart', "App\Http\Controllers\ProductController@displayCart");

Route::get('/add-to-cart/{id}',"App\Http\Controllers\ProductController@addToCart");

Route::get('/order',"App\Http\Controllers\ProductController@placeOrder");

Route::get('/login-pass',"App\Http\Controllers\UserController@auth");


Route::get('/logout',function(){
    session()->forget('userName');
    session()->forget('user_id');
    return redirect('/');
});
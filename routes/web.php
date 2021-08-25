<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('login',[UserController::class,'login']);
Route::get('/',[productController::class,'index']);
Route::get('detail/{id}',[productController::class,'detail']);
Route::get('search',[productController::class,'search']);
Route::post('add_to_cart',[productController::class,'addToCart']);
Route::get('cartlist',[productController::class,'cartlist']);
Route::get('d_product/{idd}',[productController::class,'d_product']);
Route::get('order',[productController::class,'order']);
Route::post('orderplace',[productController::class,'orderPlace']);

Route::get('myorder',[productController::class,'myorder']);
Route::post('signupp',[UserController::class,'signup']);

Route::view('signup','SignUp');





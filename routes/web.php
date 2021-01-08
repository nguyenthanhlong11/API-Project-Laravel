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

Route::get('/', function () {
    return view('welcome');
});

//route category
Route::get('/admin',"Admin\CategoryController@index");
Route::get('/home/category',"Admin\CategoryController@category")->name('admin.categories');
Route::get('/home/product',"Admin\CategoryController@product");
Route::get('/home/user',"Admin\CategoryController@user");

Route::get('/category/index/{id}/edit',"Admin\CategoryController@edit");
Route::patch('/category/index/{id}',"Admin\CategoryController@update");

route::get('/admin/category/create',"Admin\CategoryController@create");
Route::post('/admin/category/store',"Admin\CategoryController@store");

Route::delete('/category/index/{id}',"Admin\CategoryController@delete");


//route product
Route::get('/admin/product',"Admin\ProductController@index");
Route::post('/admin/product/add',"Admin\ProductController@add");
Route::get('/admin/product/add',"Admin\ProductController@create");
Route::post('/admin/product/store',"Admin\ProductController@store");

Route::get('/product/{id}/edit',"Admin\ProductController@edit");
Route::get('/product/{id}/delete',"Admin\ProductController@delete");
Route::patch('/admin/product/{id}',"Admin\ProductController@update");

// //route user
Route::delete('/user/index/{id}',"Admin\UserController@delete");

//route order
Route::get('/home/order',"Admin\OrderController@index");
Route::get('/home/order/detail/{id}',"Admin\OrderController@viewDetail");
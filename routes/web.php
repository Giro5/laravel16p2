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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;

// / - http://laravel
Route::get("/", "IndexController@page");

Route::get("/test", "TestController@page");

Route::get("/catalog", "CatalogController@page");

Route::get("/auth", "AuthController@page");

Route::get("/reg", "RegController@page");

Route::post("/reg/action", "RegController@action");

Route::post("/auth/action", "AuthController@action");

Route::get("/exit", "ExitController@page");

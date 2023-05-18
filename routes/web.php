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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detailpost', function () {
    return view('detail_post');
});

Route::get('/projectcat', function () {
    return view('detail_project-category');
});

Route::get('/notes', function () {
    return view('notes');
});


Route::get('/work', function () {
    return view('work');
});

//--------------------------------------- LOGIN ROUTE ----------------------------------------//

Route::get('/tripebblelogin', function () {
    return view('auth-login');
});

//--------------------------------------- LOGIN ROUTE ----------------------------------------//

//--------------------------------------- ADMIN ROUTES ----------------------------------------//
Route::get('/adminindex', function () {
    return view('admin.admin_index');
});
//---------------------------------------- ADMIN ROUTES ----------------------------------------//
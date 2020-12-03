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
    return view('test');
});


Route::get('/wau', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/admin/all-product', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Product editing Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/admin/product/{id}', function ($id) {
    return view('welcome');
});

Route::delete('/admin/product/{id}', function ($id) {
    return view('welcome');
});

Route::put('/admin/product/{id}', function ($id) {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Category editing Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/admin/category/{id}', function ($id) {
    return view('welcome');
});

Route::delete('/admin/category/{id}', function ($id) {
    return view('welcome');
});

Route::put('/admin/category/{id}', function ($id) {
    return view('welcome');
});


















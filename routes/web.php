<?php

use App\Http\Controllers\AdminController;
use App\Models\category;
use App\Models\product;
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

    $categories = category::all();

    $products = product::all();

    return view('mainPage', ['categories' => $categories, 'products' => $products ]);
});


Route::get('/wau', function () {
    products::create(array(
        'first_name' => 'John',
        'last_name'  => 'Doe',
        'student_rank' => 1
    ));
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'show']);

Route::get('/products', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/all-product', function () {
    return view('welcome');
});

Route::get('/admin/new-product', function () {
    return view('newProduct', [
        'categories' => category::orderBy('created_at', 'asc')->get()
    ]);
});
Route::get('/admin/new-category', function () {
    return view('newCategory');
});


/*
|--------------------------------------------------------------------------
| Product editing Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/admin/product/{id}',[AdminController::class, 'singleProduct']);

Route::post('/admin/new-product',[AdminController::class, 'newProduct']);
Route::post('/admin/new-category',[AdminController::class, 'newCategory']);

Route::delete('/admin/product/{id}', function ($id) {
    return view('welcome');
});

Route::put('/admin/product/{id}', function ($id) {


    return view('product', array('ids' => $id));


    // return view('welcome');
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


















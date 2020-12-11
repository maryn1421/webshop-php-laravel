<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [MainPageController::class, 'listProductsAndCategories']);

Route::get('/admin', [AdminController::class, 'show']) ->name("admin");

Route::get('/admin/new-product', [AdminController::class, 'getViewOfNewProduct']);

Route::get('/admin/new-category', [AdminController::class, 'getViewOfNewCategory']);


Route::get('/admin/all-category', [AdminController::class, 'getViewForAllCategories']);


/*
|--------------------------------------------------------------------------
| Product editing Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/admin/product/{id}', [AdminController::class, 'singleProduct']);
Route::get('/product/{id}', [ProductController::class, 'singleProduct']);

Route::post('/admin/new-product', [AdminController::class, 'newProduct']);
Route::post('/admin/new-category', [AdminController::class, 'newCategory']);

Route::delete('/admin/product/{id}', function ($id) {
    product::where('id',$id)->delete();
    return redirect('/admin');

}) ->name('product.remove');


/*
|--------------------------------------------------------------------------
| Category editing Routes
|--------------------------------------------------------------------------
|
*/



















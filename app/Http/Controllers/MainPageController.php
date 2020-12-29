<?php


namespace App\Http\Controllers;


use App\Models\category;
use App\Models\product;

class MainPageController extends Controller
{
    public function listProductsAndCategories()
    {
        $categories = category::all();

        $products = product::orderBy('views', 'desc')->take(5)->get();

        return view('mainPage', ['categories' => $categories, 'products' => $products]);
    }


}

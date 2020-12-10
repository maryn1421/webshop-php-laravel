<?php


namespace App\Http\Controllers;


use App\Models\category;
use App\Models\product;

class MainPageController extends Controller
{
    public function listProductsAndCategories()
    {
        $categories = category::all();

        $products = product::all();

        return view('mainPage', ['categories' => $categories, 'products' => $products]);
    }


}

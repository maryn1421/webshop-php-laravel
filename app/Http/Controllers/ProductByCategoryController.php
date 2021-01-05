<?php


namespace App\Http\Controllers;


use App\Models\product;

class ProductByCategoryController extends Controller
{


    public function listItems($id) {
        $products = product::all();


        $products = $products->where('category_id', $id);


        return view('productsByCategory', ['products' => $products]);

    }


}

<?php


namespace App\Http\Controllers;


use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function show()
    {
        return view('admin');
    }

    public function singleProduct($id) {

        return view('product', ['id' => $id]);
    }
    public function newProduct(Request $request) {
        $name = $request->name;

        $product = new product();

        $product->name = $name;
        $product->price = $request->price;
        $product->category_id = $request->category;

        $product->save();

        return redirect('/');
    }
    public function newCategory(Request $request) {
        $name = $request->name;

        $category = new category();

        $category->name = $name;
        $category->save();

        return redirect('/');
    }

}


// return view('admin', ['user' => User::findOrFail($id)]);

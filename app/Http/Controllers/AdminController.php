<?php


namespace App\Http\Controllers;


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
        echo $name;
        return $request;
    }

}


// return view('admin', ['user' => User::findOrFail($id)]);

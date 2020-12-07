<?php


namespace App\Http\Controllers;


class AdminController extends Controller
{

    public function show()
    {
        return view('admin');
    }

    public function singleProduct($id) {

        return view('product', ['id' => $id]);
    }

}


// return view('admin', ['user' => User::findOrFail($id)]);

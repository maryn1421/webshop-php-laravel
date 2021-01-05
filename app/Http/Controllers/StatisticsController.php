<?php


namespace App\Http\Controllers;


use App\Models\product;

class StatisticsController extends Controller
{

    public function listItems() {

        $products = product::orderBy('views', 'desc')->get();

        return view('statistics', ['products' => $products]);
    }


}

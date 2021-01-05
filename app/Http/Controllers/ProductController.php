<?php


namespace App\Http\Controllers;


use App\Models\product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function singleProduct($id)
    {
        $products = product::all();


        try {
            $product = product::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect('/');
        }

        $suggestions0 = $products->where('category_id', $product->category_id);
        $suggestions = $suggestions0->where('id', '!=', $id);


        return view('product', ['id' => $id, 'product' => $product, 'suggestions' => $suggestions]);
    }


    public function update(Request $request)
    {
            $product = product::find($request->id);
            $views = $product->views;
            $product->views = $views + 1;

            $product->save();
        }

}

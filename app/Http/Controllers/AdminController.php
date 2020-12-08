<?php


namespace App\Http\Controllers;


use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1024',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);

                $product = new product();

                $product->name = $name;
                $product->price = $request->price;
                $product->category_id = $request->category;
                $product->image = $url;

                $product->save();

                return redirect('/');
            }
        }
        abort(500, 'Could not upload image :(');





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

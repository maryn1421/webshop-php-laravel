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
        $categories = category::all();

        $products = product::all();

        return view('admin', ['categories' => $categories, 'products' => $products]);
    }

    public function singleProduct($id)
    {

        return view('product', ['id' => $id]);
    }

    public function newProduct(Request $request)
    {
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
                $request->image->storeAs('/public', $validated['name'] . "." . $extension);
                $url = Storage::url($validated['name'] . "." . $extension);

                $product = new product();

                $product->name = $name;
                $product->price = $request->price;
                $product->description = $request->description;
                $product->category_id = $request->category;
                $product->image = $url;

                $product->save();

                return redirect('/');
            }
        }
        abort(500, 'Could not upload image :(');


    }

    public function newCategory(Request $request)
    {
        $name = $request->name;

        $category = new category();

        $category->name = $name;
        $category->save();

        return redirect('/');
    }


    public function getViewOfNewProduct()
    {
        return view('newProduct', [
            'categories' => category::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function getViewOfNewCategory()
    {
        return view('newCategory');

    }

    public function getViewForAllCategories()
    {
        $categories = category::all();

        return view('adminAllCategory', ['categories' => $categories]);
    }

}

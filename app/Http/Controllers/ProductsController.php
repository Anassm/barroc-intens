<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getcategories()
    {
        $categorie= product_categories::all();
        return view('inkoop.productcreate',[
        'categories' => $categorie,
        ]);
    }
    public function postproduct()
    {
        $product= request()->validate([
            'category_id' => 'required',
            'name' => 'required | max:255 | min:3',
            'description' => 'required | max:255 | min:3',
            'image_path' => 'required | max:255 | min:3',
            'price' => 'required | max:255 | min:3',
        ]);

            products::create($product);
            return "GELUKT!";
    }
}

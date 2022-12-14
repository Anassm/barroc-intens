<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function getcategories()
    {
        $categorie= product_categories::all();
        return view('inkoop.productcreate',[
        'categories' => $categorie,
        ]);
    }
    public function postproduct(Request $request)
    {
       
        $request->validate([
            'product_category_id' => 'required',
            'name' => 'required | max:255 | min:3',
            'description' => 'required | max:255 | min:3',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
            'price' => 'required | max:255 | min:3',
            'amount' => 'required | max:255 | min:3',
        ]);

        
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image_path->extension();

            $test = $request->image_path->move(public_path('images'), $newImageName);

            
            products::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'amount' => $request->input('amount'),
            'product_category_id' => $request->input('product_category_id'),
            'image_path' => $newImageName,]);
            return "GELUKT!";

    }
    public function getList(Product_Categories $Product_Categories)
    {

    
        return view('inkoop.productlist',[
                'categories' =>$Product_Categories
        ]);
    }
    public function getEdit(products $products)
    {
        $categorie= product_categories::all();
        return view('inkoop.productedit',[
            'categories' => $categorie,
            'products'=> $products,
    
        ]);
    }
    public function putEdit(products $products)
    {

        $data = request()->validate([
            'product_category_id' => 'required',
            'name' => 'required | max:255 | min:3',
            'description' => 'required | max:255 | min:3',
            'price' => 'required | max:255 | min:3',
            'amount' => 'required | max:255 | min:3',

        ]);

        $products->update($data);
        return redirect('/inkoop/categorielist'. $products->product_id);
    }
    public function getDelete(products $products)
    {
        
        return view('inkoop.productdelete', ['products' => $products]);
    }

    public function deleteDelete(products $products)
    {
        
        Storage::delete($products->image_path);
        $products->delete();
        return redirect()->route('inkoop.categorielist');
    }

    public function productpagina(product_categories $product_categories)
    {
        $product = products::all();
        $categorie = product_categories::All();

        return view('productpagina',[
        'categories'=> $product_categories,
        'categoriese' => $categorie,
        'products' => $product,
        ]);
    }
    public function getproduct(product_categories $categorie)
    {
        $product = products::inRandomOrder()->limit(1)->get();
        $product_categories = product_categories::All();
        $producten = products::inRandomOrder()->limit(3)->get();
        $productsen = products::inRandomOrder()->limit(1)->get();        

        return view('welcome',[
        'categoriese'=> $product_categories,
        'products' => $product,
        'productsen' => $productsen,
        'categories' => $categorie,
        'producten' => $producten
        ]);
    }


    public function enkelproduct( products $products)
    {
        $categorie = product_categories::All();
        $product_categories = product_categories::all();
        return view('enkelpagina',[
        'products'=> $products,
        'categoriese' => $categorie,
        'categories'=> $product_categories,

        ]);
    }


    public function contact(product_categories $product_categories, products $product)
    {
        $categorie = product_categories::All();

        return view('contact',[
        'products'=> $product,
        'categoriese' => $categorie,
        'categories'=> $product_categories,

        ]);
    }
    
    
    
    
}

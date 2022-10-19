<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\User;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{

    public function getCreate(User $users)
    {
        $users = User::all();
        return view('inkoop.create',[
            'users'=> $users,
    
        ]);
    
    }
    public function postcategorie()
    {
        $categorie = request()->validate([
            'name' => 'required | max:255 | min:3',
            'is_employee_only' => 'required'

        ]);
        product_categories::create($categorie);
        return redirect('/');
    }
    public function getList()
    {
        $categorie = product_categories::all();
        return view('inkoop.categorielist',[
                'categories' => $categorie,
        ]);
    }
    public function getEdit()
    {
        $categorie= product_categories::all();
        return view('inkoop.categorieedit',[
            'categories' => $categorie,
    
        ]);
    }
    public function putEdit(product_categories $categorie)
    {

        $data = request()->validate([
            'name' => 'required | max:255 | min:3',
            'is_employee_only' => 'required'

        ]);

        $categorie->update($data);
        return redirect('/inkoop/categorielist'. $categorie->categorie_id)->with('succes', 'goed gewijzigd');
    }
    public function getDelete(product_categories $categories)
    {
        
        return view('inkoop.categoriedelete', ['categories' => $categories]);
    }

    public function deleteDelete(product_categories $categories)
    {
        $categories->products()->delete();
        $categories->delete();
        return redirect()->route('inkoop.categorielist');
    }
}

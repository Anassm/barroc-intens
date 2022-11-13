<?php

namespace App\Http\Controllers;

use App\Models\nieuwklant;
use App\Models\companies;
use Illuminate\Http\Request;

class NieuwklantController extends Controller
{
        public function getcreate()
    {
        $klant= companies::all();
        return view('sales.nieuwklant',[
        'klanten' => $klant,
        ]);
    }

    public function postklant(Request $request)
    {

        companies::create([
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'street' => $request->input('street'),
        'house_number' => $request->input('house_number'),
        'city' => $request->input('city'),
        'country_code' => $request->input('country_code'),
        'contact_id' => $request->input('contact_id'),
        'created_at' => $request->input('created_at'),
        'updated_at' => $request->input('updated_at'),]);
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactuurController extends Controller
{
    public function factuurPageView() {
        return view("finance.factuur_voorbeeld");
    }

    public function factuurCreate() {
        return view("finance.factuur_create");
    }

}

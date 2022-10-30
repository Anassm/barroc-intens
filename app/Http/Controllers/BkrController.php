<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;

class BkrController extends Controller
{
    public function bkrPageView() {
        return view("finance.bkr");
    }
    public function bkrPageLoad(companies $companies) {
        $companies->update([
            "bkr_checked_at" => date("Y-m-d")
        ]);

        return redirect("/dashboard"); 
    }
}

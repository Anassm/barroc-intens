<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class CompaniesController extends Controller
{
    
    public function putEdit(companies $company)
    {
        $company->update([
            "bkr_checked_at" => Date("y-m-d")
        ]);
        return redirect('/dashboard')->with('Bkr-check voltooid.');
    }
}

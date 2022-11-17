<?php

namespace App\Http\Controllers;
use App\Models\storing;
use Illuminate\Http\Request;

class storingController extends Controller
{
    public function storings()
    {
        $storings = storing::All();
        return view('maintenance.storing',[
        'storingen'=> $storings,
    

        ]);
    }
}

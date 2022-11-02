<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storingController extends Controller
{
    public function storingPageView() {
        return view("maintenance.storing");
    }
}

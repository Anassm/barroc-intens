<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class teamscontroller extends Controller
{
    public function team($teamsid)
    {
        $teams = Team::findOrfail($teamsid);
        return view('dashboard')->with($teams);
    }
    
}

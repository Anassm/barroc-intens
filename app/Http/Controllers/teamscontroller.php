<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class teamscontroller extends Controller
{
    public function team()
    {

        $teamid = Auth::user()->current_team_id;
        
       if($teamid == 4){
        return view('inkoop.inkoopdashboard', [
            'teamid' => $teamid
        ]);
    
       }

       if($teamid == 2){
        return view('finance.financedashboard',[
            'teamid' => $teamid
        ]);
       }
       if($teamid == 5){
        return view('maintenance.maintenancedashboard',[
            'teamid' => $teamid
        ]);
       }
       if($teamid == 3){
        return view('sales.salesdashboard',[
            'teamid' => $teamid
        ]);
       }
    }
    
}

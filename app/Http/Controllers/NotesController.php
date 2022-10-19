<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
        public function getcreate()
    {
        $klant= companies::all();
        return view('sales.notes',[
        'klanten' => $klant,
        ]);
    }

    public function postnotes()
    {
        $notes = request()->validate([
            'note' => 'required | max:255 | min:3',
            'date' => 'required'

        ]);
        notes::create($notes);
        return redirect('/');
    }
}

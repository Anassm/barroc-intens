<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'company_id' => 'required',
            'note' => 'required | max:255 | min:3',

        ]);
        $notes['date'] = date('Y-m-d');
        $notes['author_id'] = Auth::id();

        notes::create($notes);
        return redirect('/');
    }
}

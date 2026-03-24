<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;

class DramaController extends Controller
{
    // ask the model for all dramas
    public function index() {
        $dramas = Drama::all(); 
        return view('dramas.index', compact('dramas')); // send data to the view
    }


    // show form to create new drama
    public function create() {
        return view('dramas.create'); 
    }

    public function store(Request $request) {
        Drama::create($request->all()); // save to DB
        return redirect('/dramas'); // go back to list
    }
}

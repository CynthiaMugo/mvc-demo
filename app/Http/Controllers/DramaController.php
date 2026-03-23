<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;

class DramaController extends Controller
{
    //
    public function index() {
        $dramas = Drama::all(); // ask the model for all dramas
        return view('dramas.index', compact('dramas')); // send data to the view
    }
}

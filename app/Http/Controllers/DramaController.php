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

    // show form to edit a drama
    public function edit($id) {
        $drama = Drama::findOrFail($id);
        return view('dramas.edit', compact('drama'));
    }

    public function update(Request $request, $id) {
        $drama = Drama::findOrFail($id);
        $drama->update($request->all());

        return redirect('/dramas');
    }

    // delete a drama
    public function destroy($id) {
        $drama = Drama::findOrFail($id);
        $drama->delete();

        return redirect('/dramas');
    }
    // toggle watched status

    public function toggle($id) {
        $drama = Drama::findOrFail($id);
        $drama->watched = !$drama->watched; // flip true/false
        $drama->save();

        return redirect('/dramas');
    }

}

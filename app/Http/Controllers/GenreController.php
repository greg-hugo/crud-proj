<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Game;
class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return view('genre', compact('genres'));
    }

    public function add(){
        return view('add');
    }

    public function show($id){
        $genre = Genre::findOrFail($id);
        return view('view', compact('genre'));
    }

    public function store(Request $request){
        $request->validate([
            'tag' => 'required'
        ]);
        Genre::create([
            'tag' => $request->tag
        ]);

        return redirect('/genre');
    }

    public function edit($id){
        $genre = Genre::findorFail($id);
        return view('overhaul', compact('genre'));
    }

    public function update(Request $request, $id){
        Genre::findorFail($id)->update([       
            'tag' => $request->tag
        ]);
        return redirect('/');
    }

    public function destroy($id){
        Genre::destroy($id);
        return back();
    }
}

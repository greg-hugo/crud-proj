<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Genre;
class GameController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('welcome', compact('games'));
    }

    public function create(){
        $genres = Genre::all();
        return view('create', compact('genres'));
    }

    public function show($id){
        $game = Game::findOrFail($id);
        return view('show', compact('game'));
    }

    public function store(Request $request){    
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'dev' => 'required',
            'release' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'genre_id' => 'required'
        ]);
        // "|" tambahin ke sebelah required buat jadi rules error tambahan
        Game::create([
            'title' => $request->title,
            'dev' => $request->dev,
            'release' => $request->release,
            'price' => $request->price,
            'rating' => $request->rating,
            'genre_id' => $request->genre_id
        ]);
    
        return redirect('/');
    }

    public function edit($id){
        $game = Game::findorFail($id);
        $genres = Genre::all();
        return view('update', compact('game','genres'));
    }

    public function update(Request $request, $id){
        
        Game::findorFail($id)->update([
            'title' => $request->title,
            'dev' => $request->dev,
            'release' => $request->release,
            'price' => $request->price,
            'rating' => $request->rating,
            'genre_id' => $request->genre_id
        ]);
        return redirect('/');
    }

    public function destroy($id){
        Game::destroy($id);
        return back();
    }
}

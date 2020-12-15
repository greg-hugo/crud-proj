<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
class GameController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('welcome', compact('games'));
    }
    public function create(){
        return view('create');
    }
    public function show($id){
        $game = Game::findOrFail($id);
        return view('show', compact('game'));
    }
    public function store(Request $request){
        Game::create([
            'title' => $request->title,
            'dev' => $request->dev,
            'release' => $request->release,
            'price' => $request->price,
            'rating' => $request->rating 
        ]);
        return redirect('/');
    }
    public function edit($id){
        $game = Game::findorFail($id);
        return view('update', compact('game'));
    }
    public function update(Request $request, $id){
        Game::findorFail($id)->update([
            'title' => $request->title,
            'dev' => $request->dev,
            'release' => $request->release,
            'price' => $request->price,
            'rating' => $request->rating
        ]);
        return redirect('/');
    }
    public function destroy($id){
        Game::destroy($id);
        return back();
    }
}

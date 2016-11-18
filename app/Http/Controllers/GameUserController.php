<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Videojuego;

class GameUserController extends Controller
{
	public function principal(){
		return view('user.index');
	}
	
    public function showGames(){
    	$games=Videojuego::all();
    	return view('user.pricing', compact('games'));
    }

    public function about(){
    	return view('user.about');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Videojuego;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new_game');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $newGame = new Videojuego;
        $newGame->titulo = $request->title;
        $newGame->autor = $request->autor;
        $newGame->descripcion = $request->description;
        $newGame->link = $request->link;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/', $file->getClientOriginalName());
            $newGame->imagen = $file->getClientOriginalName();
        }
        $newGame->save();

        \Session::Flash('flash_message', 'El juego se ha registrado correctamente');
        return redirect()->route('game.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showAll(){
        $game=Videojuego::all();
        return view('admin.show_games', compact('game'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Videojuego::findOrFail($id);
        return view('admin.edit_game', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Videojuego::findOrFail($id)->update($request->all()); 
        return redirect()->route('game.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Videojuego::findOrFail($id)->delete();
        return redirect()->route('game.index');
    }
}

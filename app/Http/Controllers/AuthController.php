<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;
use Hash;
use Redirect;

class AuthController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function store(Request $request){

        /*$user = new User;
        $user->email = "CDVEscom";
        $user->password = Hash::make('clubvideojuegos');
        $user->save();*/

    	if(Auth::attempt(['email' => $request->name, 'password' => $request->password])){
    		return view("admin.home");
    	}else{
    		\Session::Flash('wrong_data', 'Username or Password incorrect. Try again!');
            return redirect()->route('auth.index');
    	}

    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('auth.index');
    }
}

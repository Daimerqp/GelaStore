<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
    return view('login');
    }

    public function store(){
        if (auth()->attempt(Request(['email', 'password']))==false){
            return back()->withErrors(['message'=>'Los datos de acceso son erroneos']);
        }
        else{
            return redirect()->to('/');
        }

    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}


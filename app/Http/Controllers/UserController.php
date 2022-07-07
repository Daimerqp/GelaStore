<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        return redirect()->to('/');
    }
}

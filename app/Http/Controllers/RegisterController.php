<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function show(){
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/home')->with('success', "Account successfully registered.");
        /*
        $user = new User;
         $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->setPassword($request->password);
        $user->save();
        return redirect('/asdasd')->with('success', "Account successfully registered."); */

=======
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {

        return view('auth.register');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');
>>>>>>> 0c706e9b23ee3a08256081138c023afdeda333be
    }
}

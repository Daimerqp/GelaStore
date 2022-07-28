<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    ///////////////////
    // CRUD USUARIOS//
    /////////////////

    // public function index()
    // {
    //     //pagina de inicio
    //     $crud = User::all();
    //     return view('admin', ['crud'=>$crud]);
    //     // return view('admin')->with('crud', $crud);
    // }

    // public function show($id)
    // {
    //     //sirve para obtener registros de la tabla
    //     $usuario = User::find($id);
    //     return view("eliminar" , compact('admin'));
    // }

    // public function edit($id)
    // {
    //     //este metodo nos sirve para traer los datos que se van a editar
    //     //y los coloca en un formulario

    //     $usuario = User::find($id);
    //     return view("actualizar" , compact('admin'));

    // }


    // public function update(Request $request, $id)
    // {
    //     //este metodo actualiza los datos en la bd
    //     $usuario = User::find($id);
    //     $usuario->username = $request->post('username');
    //     $usuario->email = $request->post('email');
    //     $usuario->name = $request->post('name');
    //     $usuario->save();

    //     return redirect()->route("admin")->with("success", "Actualizado con exito!");

    // }

    // public function destroy($id)
    // {
    //     $usuario = User::find($id);
    //     $usuario->delete();
    //     return redirect()->route("admin")->with("success", "Eliminado con exito!");
    // }
}

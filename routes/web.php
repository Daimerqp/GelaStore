<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/registro', function () {
    return view('registro');
}) ->name('registro');

Route::get('/AboutUs', function () {
    return view('About');
}) ->name('about');

Route::get('/IniciarSesion', function () {
    return view('Iniciar');
}) ->name('iniciar');

Route::get('/Soporte', function () {
    return view('Soporte');
}) ->name('soporte');

Route::get('/views', function () {
    return view('views');
}) ->name('views');

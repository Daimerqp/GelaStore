<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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

Route::get('/views', function () {
    return view('views');
}) ->name('views');

Route::get('/about', function () {
    return view('AboutUs');
}) ->name('about');

Route::get('/carrito', function () {
    return view('carrito');
}) ->name('carrito');

Route::get('/viewsCoco', function () {
    return view('viewsCoco');
}) ->name('coco');

Route::get('/viewsAlmendras', function () {
    return view('viewsAlmendras');
}) ->name('almendras');

Route::get('/viewsHojuelas', function () {
    return view('viewsHojuelas');
}) ->name('hojuelas');

Route::get('/viewsGranola', function () {
    return view('viewsGranola');
}) ->name('granola');

Route::get('/viewsQuinua', function () {
    return view('viewsQuinua');
}) ->name('quinua');

Route::get('/viewsArandanos', function () {
    return view('viewsArandanos');
}) ->name('arandanos');

Route::get('/pagoForm', function () {
    return view('pagoForm');
}) ->name('pago');



Route::get('/pagoTest', function () {
    return view('pagoTest');
}) ->name('pagoTest');

Route::get('/pagoComp', function () {
    return view('pagoComp');
}) ->name('pagoComp');
/* Route::get('/register', [RegisterController::class, 'show']);
Route::post('/action-register', [RegisterController::class, 'register']); */

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

route::get('/admin', function(){
    return view('users');
})->name('admin');

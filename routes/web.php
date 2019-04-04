<?php

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
    return view('contents');
});

Route::get('/connecter', function () {
    return view('connecter');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/ficher-produit', function () {
    return view('ficher-produit');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/content', function () {
    return view('contents');
});

Route::get('/femme', function () {
    return view('femme');
});

Route::get('/panier', 'HomeController@panier')->name('panier');
Route::get('/produitdel', 'HomeController@produitdel')->name('produitdel');

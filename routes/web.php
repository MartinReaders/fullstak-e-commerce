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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ficher-produit', function () {
    return view('ficher-produit');
});



Route::get('/panier', 'HomeController@panier')->name('panier');

Route::get('/produitdel', 'HomeController@produitdel')->name('produitdel');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

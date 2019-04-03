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
    return view('homme');
});




Route::get('/login', function () {
    return view('login');
});


Route::get('/ficher-produit', function () {
    return view('ficher-produit');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/filter', function () {
    return view('filter');
});

Route::get('/homme', function () {
    return view('homme');
});

Route::get('/femme', function () {
    return view('femme');
});

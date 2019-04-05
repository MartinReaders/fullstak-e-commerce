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

Route::get('/reebok', function () {
    return view('reebok');
});

Route::get('/nike', function () {
    return view('nike');
});

Route::get('/lonsdale', function () {
    return view('lonsdale');
});

Route::get('/tapout', function () {
    return view('tapout');
});

Route::get('/everlast', function () {
    return view('everlast');
});

Route::get('/adidas', function () {
    return view('adidas');
});

Route::get('/t-shirt', function () {
    return view('t-shirt');
});

Route::get('/short', function () {
    return view('short');
});

Route::get('/sac', function () {
    return view('sac');
});

Route::get('/gang', function () {
    return view('gang');
});

Route::get('/changepassword', function () {
    return view('changepassword');
});
Route::post('/changePassword','CompteController@changePassword')->name('changePassword');


Route::get('/changename', function () {
    return view('changename');
});

Route::post('/changeName','NameController@changeName')->name('changeName');

Route::get('/panier', 'HomeController@panier')->name('panier');
Route::get('/produitdel', 'HomeController@produitdel')->name('produitdel');

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

    // chemin vers la premiere page du site, l'index ou home
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', function () {
    return view('login.authentification');
})->name('login');

Route::get('admin', function () {
    return view('admin.dashboard');
})->name('admin');

Route::get('person', function(){
    return view('formulaire.personne');
})->name('person');

Route::get('ecole', function(){
    return view('formulaire.ecole');
})->name('ecole');
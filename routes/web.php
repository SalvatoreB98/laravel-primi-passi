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
    return view('home', [
        "name" => "Salvatore",
        "surname" => "Butera"
    ]);
})->name("home");

Route::get('/links', function () {
    return view('links');
})->name("links") ;

Route::get('/mappa', function () {
    return view('map');
})->name("map") ;

Route::get('/contattaci', function () {
    return view('contactUs');
})->name("contactUs") ;
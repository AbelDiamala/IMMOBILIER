<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/laravel', function () {
    return view('welcome');
});



//Route::get('/', function () {return view('site.index');});

Route::get('/', [IndexController::class, 'index']);




Route::get('/maison.location', function () {
    return view('site.location');
});

Route::get('/maison.vente', function () {
    return view('site.vente');
});

Route::get('/contact', function () {
    return view('site.contact');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BienController;


Route::get('/laravel', function () {return view('welcome');});


Route::get('/', [IndexController::class, 'index']);

Route::get('/bien/{id}', [BienController::class, 'show'])->name('bien.show');




Route::get('/maison.location', function () {
    return view('site.location');
});

Route::get('/maison.vente', function () {
    return view('site.vente');
});

Route::get('/contact', function () {
    return view('site.contact');
});
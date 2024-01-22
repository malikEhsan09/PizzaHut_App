<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/deals', function () {
    return view('deals');
});


Route::get('/salads', function () {
    return view('salads');
});


Route::get('/deserts', function () {
    return view('deserts');
});


Route::get('/drinks', function () {
    return view('drinks');
});

Route::get('/pizza', function () {
    return view('pizza');
});


Route::get('/starters', function () {
    return view('starters');
});


Route::get('/find_pizzhut_map', function () {
    return view('find_pizzhut_map');
});


Route::get('/login', function () {
    return view('auth.login');
})-> name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


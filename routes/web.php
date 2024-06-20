<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bus');
});
Route::get('/avia', function () {
    return view('avia');
});
Route::get('/poezda', function () {
    return view('poezda');
});
Route::get('/metro', function () {
    return view('metro');
});
Route::get('/raspisanie', function () {
    return view('raspisanie');
});
Route::get('/raspisanie-electro', function () {
    return view('raspisanie-electro');
});



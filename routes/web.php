<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('benvenuto');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('users/', function () {
    return view('profile');
});

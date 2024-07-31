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

Route::get('Pratiche/', function () {
    return view('PratichePresentate');
});

// routes/web.php

use App\Http\Controllers\PracticeController;

Route::resource('practices', PracticeController::class);





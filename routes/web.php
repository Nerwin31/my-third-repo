<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/exercise-1', function () {
    return view('exercise1');
});

Route::get('/exercise-2', function () {
    return view('exercise2');
});

Route::get('/exercise-3', function () {
    return view('exercise3');
});

Route::get('/exercise-4', function () {
    return view('exercise4');
});

Route::get('/register', [RegistrationController::class, 'showForm']);
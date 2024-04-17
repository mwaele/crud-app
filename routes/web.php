<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PharmacyController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PharmacyController::class, 'index']);
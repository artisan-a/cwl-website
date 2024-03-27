<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//home page
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

//about us
Route::get('/about', function () { return view('company.aboutUs'); });

//services
Route::get('/service', function () { return view('company.service'); });

Route::fallback(function () {
    return response()->view('404', [], 404);
});
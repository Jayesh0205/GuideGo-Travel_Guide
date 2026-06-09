<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/destinations', 'destinations')
    ->name('destinations');

Route::get('/district/{district}',
    [DistrictController::class,'show'])
    ->name('district.show');

Route::get('/shendurni', function () {
    return view('shendurni');
});

Route::get('/jamner', function () {
    return view('jamner');
});

Route::get('/jalgaon', function () {
    return view('jalgaon');
});

Route::get('/jal', function () {
    return view('welcome');
});

Route::post('/favorite',
    [FavoriteController::class, 'store']);



// Authorisathion routes

    

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::middleware('auth')->group(function () {

    Route::get('/destinations', function () {
        return view('destinations');
    });

});

Route::post('/logout', [AuthController::class,'logout'])
    ->name('logout');

    Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::post('/favorite',
[FavoriteController::class,'store'])
->middleware('auth');
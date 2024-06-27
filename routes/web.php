<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     route::get('/home',[HomeController::class,'redirect']->name('home');

//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard'); 
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Redirect route
    Route::get('/redirect', [HomeController::class, 'redirect']);
    
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

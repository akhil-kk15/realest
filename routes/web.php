<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/view_lists', [AdminController::class, 'view_lists'])->name('view_lists');
Route::get('/view_listingtable',[AdminController::class,'view_lisitingtable'])->name('view_listingtable');
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

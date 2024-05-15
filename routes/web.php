<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('foto.all');
// });

// Route::get('/profile', function() {
//     return view('dashboard.akun');
// });


// Route::get('/register', function() {
//     return view('register');
// });

// Route::get('/login', function() {
//     return view('login');
// });

// // Route Login 
// Route::controller(UserController::class)->group(function(){
//     Route::post('/register','register');
//     Route::post('/login','login');
//     Route::post('/logout','logout');
// });

// // Route Category
// Route::controller(CategoryController::class)->group(function(){
//     Route::get('/create','create')->name('create');
//     Route::post('/store','store')->name('store');
//     Route::get('/destroy/{id}', 'destroy')->name('destroy');
//     Route::get('/edit/{id}','edit')->name('edit');
//     Route::post('/update/{id}','update')->name('update');
// });

// // Route CategoryFoto
// Route::controller(CategoryController::class)->group(function(){
//     Route::get('/create','create')->name('create');
//     Route::post('/store','store')->name('store');
//     Route::get('/destroy/{id}', 'destroy')->name('destroy');
//     Route::get('/edit/{id}','edit')->name('edit');
//     Route::post('/update/{id}','update')->name('update');
// });

// // Route Foto
// Route::controller(FotoController::class)->group(function(){
//     Route::get('/foto', 'index')->name('foto');
//     Route::get('/foto/create','create')->name('foto.create');
//     Route::post('/foto/store','store')->name('foto.store');
//     Route::get('/destroy/{id}', 'destroy')->name('destroy');
//     Route::get('/edit/{id}','edit')->name('edit');
//     Route::post('/update/{id}','update')->name('update');
// });
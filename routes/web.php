<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/about', function () {
    return view('about');
});


Route::get('/donate', function () {
    return view('donate');
});


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/better-vision', function () {
    return view('better_vision');
});


Route::get('/better-birth', function () {
    return view('better_birth');
});
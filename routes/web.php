<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;

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



Route::get('/logout', function () {
    return 'You have been logged out';
})->name('logout');




Route::get('/login', function () {
    return view('login');
})->name('login');



Route::post('/admin_login', [Controller::class, 'adminLogin']);







// Route::get('/news/{slug}', [BlogController::class, 'blogSingleIndex']);
// Route::get('/news', [BlogController::class, 'blogsIndex']);
// Route::get('/act_auth', [BlogController::class, 'actAuth']);



Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/create-post', [BlogController::class, 'blogIndex']);
    Route::post('/create-post', [BlogController::class, 'createPost']);
    Route::post('/update-post', [BlogController::class, 'updatePost']);
});
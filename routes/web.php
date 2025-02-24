<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;


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

// If you want to display 'user_form', remove the above route or change the URL
Route::get('/user-form', function () {
    return view('user_form');
});

Route::get('/hello', function () {
    return view('hello-laravel');
})->name('greeting');

Route::get('/show-greeting', [WelcomeController::class, 'showGreeting']);
Route::get('/redirect-greeting', [WelcomeController::class, 'redirectGreeting']);

Route::get('/user/{name?}', function ($name = null) { 
    if ($name) {
        return 'User name is '.$name;
    } else {
        return 'No name provided';
    }
});

// POST Request     
Route::post('/submit-form', [UserController::class, 'submitForm']);

// PUT Request
Route::put('/update-user/{id}', [UserController::class, 'userUpdate']);


Route::get('/aboutme', function () {
    return view('aboutme');
});

// POST Request
Route::post('/submit-form', [UserController::class, 'submitform']);

// PUT Request
Route::put('/update-user/{id}', [UserController::class, 'updateUser']);

// PATCH Request
Route::patch('/modify-user/{id}', [UserController::class, 'modifyUser']);

// DELETE Request
Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser']);


/*-- portfolio routes *---*/

Route::get('/', [PageController::class, 'home'])->name('home'); // Homepage
Route::get('/skills', [PageController::class, 'skills'])->name('skills'); // Skills Page
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery'); // Gallery Page

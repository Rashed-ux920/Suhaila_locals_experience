<?php

use App\Http\Controllers\viewcontroller;
use Illuminate\Support\Facades\Auth;
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

// the user side pages and logice

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/about',[viewcontroller::class,'aboutpage'])->name('about');

Route::get('/blog',[viewcontroller::class,'blogpage'])->name('blog');

Route::get('/contact',[viewcontroller::class,'contactpage'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

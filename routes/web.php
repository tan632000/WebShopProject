<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/trangchu', function () {
    return view('frontend.home');
});

Route::get('/vertu', function () {
    return view('frontend.vertu');
});

Route::get('/dongho', function () {
    return view('frontend.dongho');
});

Route::get('/phukien', function () {
    return view('frontend.phukien');
});

Route::get('/khampha', function () {
    return view('frontend.khampha');
});

Route::get('/dichvu', function () {
    return view('frontend.dichvu');
});

Route::get('/lienhe', function () {
    return view('frontend.lienhe');
});


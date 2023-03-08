<?php

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
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'App\Http\Controllers\RegistrationController@store');
Route::get('/register/{user}/edit', 'App\Http\Controllers\RegistrationController@edit');
Route::put('/register/{user}', 'App\Http\Controllers\RegistrationController@update');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

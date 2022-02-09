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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('compte',App\Http\Controllers\CompteController::class);//->name('compte');
Route::resource('ville',App\Http\Controllers\VilleController::class);//->name('ville');
Route::resource('user',App\Http\Controllers\CompteController::class);//->name('user');
Route::resource('offre',App\Http\Controllers\OffreController::class);//->name('offre');
Route::resource('enregistrement',App\Http\Controllers\CompteController::class);//->name('enregistrement');

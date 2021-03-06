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

Route::view('/', 'home' ) ->name('home');
Route::view('/servicios', 'services' ) ->name('services');
Route::view('/publicar', 'form' ) ->name('form');
Route::view('acerca-de', 'about') ->name('about');

Route::get('blog', 'BlogController@index' ) ->name('blog.index');
Route::get('blog/{post:slug}', 'BlogController@show' ) ->name('blog.show');

Route::view('contactos', 'contact') ->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/form', function () {
    return view('form');
});

<?php

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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('index');
})->name('home');
Route::get('/about', function () {
	return view('about');
})->name('about');
Route::get('/subscribe', function () {
	return view('subscribe');
})->name('subscribe');

Route::post('/', 'UserFormController@submitIndex')->name('index');
Route::post('/subscribe', 'UserFormController@submitSubscribe')->name('subscribe');
Route::post('/about', 'UserFormController@submitAbout')->name('about');


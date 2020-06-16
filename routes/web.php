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
Route::get('/phones/home','PhoneController@home')->name('home');
Route::get('/phones/dashboard','PhoneController@index')->name('dashboard');

Route::get('/phones/create','PhoneController@create');
Route::post('/phones','PhoneController@store');

Route::delete('/phones/{id}','PhoneController@destroy');

Route::get('/phones/{id}/edit','PhoneController@edit');
Route::patch('/phones/{id}','PhoneController@update');



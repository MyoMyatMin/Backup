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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/calculate',function(){
    return view('index');
});
Route::post('/calculate','CalculateController@calculate');
Route::get('/withvalue',function(){
    return view('calculatewithprise');
});
Route::post('/withvalue','PriseController@calculate');
Route::get('/Vouncher',function(){
    return view('vouncher');
});

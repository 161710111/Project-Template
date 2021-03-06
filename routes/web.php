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

Route::get('/', function () {
    return view('welcome');
});
Route::get('template','LatihanController@index');

Route::get('/paragrap', function () {
    return view('partial.index');
});

Route::get('/image', function () {
    return view('partial.index1');
});

Route::get('/custom1', function () {
    return view('partial.index2');
});

Route::get('/custom2', function () {
    return view('partial.index3');
});

Route::get('/table', 'LatihanController@table');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

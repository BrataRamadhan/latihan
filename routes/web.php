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

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/tambah', 'StudentController@create')->name('tambah');
Route::post('/inputdata', 'StudentController@store')->name('inputdata');
Route::get('/survey','StudentController@index')->name('tampil');
Route::get('/palindrome', 'PalindromeController@palindrome')->name('palindrome');

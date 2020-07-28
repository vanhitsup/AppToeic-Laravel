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
Route::get('toeicapp','NewwordController@index');
Route::get('search/{id?}','NewwordController@search');

Route::get('toeicapp/create','NewwordController@create');
Route::post('toeicapp/create','NewwordController@store');

Route::get('toeicapp/edit/{id}','NewwordController@edit');
Route::post('toeicapp/edit/{id}','NewwordController@update');

Route::get('toeicapp/delete/{id}','NewwordController@delete');
Route::post('toeicapp/delete/{id}','NewwordController@destroy');

Route::get('sentence/{id}','SentenceController@index');
Route::get('sentence/create/{id}','SentenceController@create');
Route::post('sentence/create/{id}','SentenceController@store');

Route::get('sentence/edit/{id}','SentenceController@edit');
Route::post('sentence/edit/{id}','SentenceController@update');

Route::get('sentence/delete/{id}','SentenceController@delete');
Route::post('sentence/delete/{id}','SentenceController@destroy');

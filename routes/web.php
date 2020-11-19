<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
//downloads
Route::get('/downloads','App\Http\Controllers\LessonsController@lessons');

//Route::get('/create','App\Http\Controllers\LessonsController@createform');
//Route::post('/create','App\Http\Controllers\LessonsController@createhandle');
Route::get('/show/{id}','App\Http\Controllers\LessonsController@show');

//attachment
//Route::get('/audio','App\Http\Controllers\AttachmentsController@createAudio');
//Route::post('/audio','App\Http\Controllers\AttachmentsController@createAudioHandle');
Route::get('/show,{id}','App\Http\Controllers\AttachmentsController@createAudioHandle');
//Route::get('audio/download,{audio}','App\Http\Controllers\AttachmentsController@download');

//sign up
//Route::get('/register','App\Http\Controllers\UserController@registerform');
//Route::post('/register','App\Http\Controllers\UserController@registerhandle');

//login
//Route::get('/login','App\Http\Controllers\UserController@loginform');
//Route::post('/login','App\Http\Controllers\UserController@loginhandle');



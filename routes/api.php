<?php

use Illuminate\Http\Request;


Route::get('task','TaskController@index');
Route::get('task/{task}','TaskController@show');
Route::post('task','TaskController@store');
Route::put('task/{task}','TaskController@update');
Route::delete('task/{task}','TaskController@destroy');
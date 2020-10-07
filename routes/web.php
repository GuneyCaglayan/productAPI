<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Render view
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/stocks','CrudController@index')->name('home');
Route::get('stocks/delete/{product}','CrudController@destroy')->name('delete');
// CRUD API route
Route::post('/stocks','CrudController@store')->name('store');

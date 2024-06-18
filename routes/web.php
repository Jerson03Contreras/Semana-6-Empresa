<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::view('contacto', 'contacto')->name('contacto');

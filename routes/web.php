<?php

use Illuminate\Support\Facades\Route;

// Removed incomplete and misplaced function block

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('jasc')->namespace('App\Http\Controllers')->group(function () {
    Route::get('/conta-pessoal', 'ContaPessoalController@index');
});

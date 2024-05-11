<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/panel/layout/app', function () {
    return view('panel.layout.app');

});

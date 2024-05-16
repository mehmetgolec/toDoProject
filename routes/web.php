<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/panel/layout/app', function () {
    return view('panel.layout.app');

});

Route::get("/panel/tasks/create", [TaskController::class,"createPage"]);
Route::post("/panel/tasks/add", [TaskController::class, "addTask"])->name("panel.addTask");


//category routes starts
Route::get('/panel/categories/index', [CategoryController::class, 'index'])->name('panel.categories.index');
Route::get('/panel/categories/create', [CategoryController::class, 'create'])->name('panel.categories.create');
Route::post('/panel/categories/add', [CategoryController::class, 'categoryAdd'])->name('panel.categories.add');

//category routes ends

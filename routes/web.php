<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TabletController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tablet', TabletController::class);
Route::resource('/category',CategoryController::class);

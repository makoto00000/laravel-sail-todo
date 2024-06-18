<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todolist', \App\Http\Controllers\Todolist\TodolistController::class)->name('todolist');
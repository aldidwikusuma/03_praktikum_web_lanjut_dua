<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Tugas Praktikum 2
Route::get("/home", [HomeController::class, 'index']);
Route::get("/about", [AboutController::class, 'index']);
Route::get("/contact", [ContactController::class, 'index']);
Route::get("/blog", [BlogController::class, 'index']);
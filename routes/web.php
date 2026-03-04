<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'list']);
Route::view('/home', 'home');
Route::view('/contact', 'contact');
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);

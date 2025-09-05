<?php

use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::post('/demo-request', [DemoRequestController::class, 'store'])
    ->name('demo.request.store');
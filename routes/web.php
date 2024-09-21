<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitController;
use Core\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/admission', [AdmissionController::class, 'index']);
Route::get('/donation', [DonationController::class, 'index']);
Route::get('/public', [VisitController::class, 'index']);


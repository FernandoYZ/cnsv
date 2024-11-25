<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre-nosotros', [AboutController::class, 'index'])->name('about');
Route::get('/visitanos', [VisitController::class, 'index'])->name('visit');
Route::get('/donaciones', [DonationController::class, 'index'])->name('donation');
Route::get('/admision', [AdmissionController::class, 'index'])->name('admission');

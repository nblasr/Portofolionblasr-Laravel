<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Portfolio Routes
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Optional: Jika mau bikin route terpisah untuk sections
// Route::get('/about', [PortfolioController::class, 'about'])->name('about');
// Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
// Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
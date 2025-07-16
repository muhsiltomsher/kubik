<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects'); // 👈 USE Controller@index for list
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Project Details (Dynamic by slug)
|--------------------------------------------------------------------------
*/

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

/*
|--------------------------------------------------------------------------
| Services (Named + Fallback by slug)
|--------------------------------------------------------------------------
*/

Route::get('/services/web-development', [ServiceController::class, 'web'])->name('service.web');
Route::get('/services/design', [ServiceController::class, 'design'])->name('service.design');
Route::get('/services/marketing', [ServiceController::class, 'marketing'])->name('service.marketing');

// Catch-all slug route (ensure this is LAST)
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.show');

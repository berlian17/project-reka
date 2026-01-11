<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/sitemap.xml', [PageController::class, 'siteMap']);

Route::prefix('projects')->name('project.')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/{slug}', [ProjectController::class, 'show'])->name('show');
});

Route::prefix('services')->name('service.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('show');
});

Route::prefix('media')->name('media.')->group(function () {
    Route::get('/', [MediaController::class, 'index'])->name('index');
    Route::get('/{slug}', [MediaController::class, 'show'])->name('show');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'sendMail'])->name('send');
});

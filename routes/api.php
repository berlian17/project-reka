<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap', [PageController::class, 'siteMap'])->middleware('apikey');

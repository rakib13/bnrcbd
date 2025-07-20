<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\LeadershipLegacyController;
use App\Http\Controllers\ShareYourThoughtController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/publication', [PublicationController::class, 'index']);
Route::get('/leadership-legacy', [LeadershipLegacyController::class, 'index']);
Route::get('/share-your-thought', [ShareYourThoughtController::class, 'index']);

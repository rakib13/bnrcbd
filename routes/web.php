<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\LeadershipLegacyController;
use App\Http\Controllers\ShareYourThoughtController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublishController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/publication', [PublicationController::class, 'index']);
Route::get('/leadership-legacy', [LeadershipLegacyController::class, 'index']);
Route::get('/share-your-thought', [ShareYourThoughtController::class, 'index']);

Route::get('/reg', [UserInfoController::class, 'create']);
Route::post('/reg', [UserInfoController::class, 'store'])->name('userInfo.store');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginUser'])->name('login.submit');

// Dashboard (only for authenticated users)
Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth')->name('dashboard.dashboard');

Route::get('/add-book', [PublishController::class, 'create']);
Route::post('/add-book', [PublishController::class, 'store']);
// Route::get('/add-book', function(){ return view('dashboard.addBook');});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\LeadershipController;

use App\Http\Controllers\ArchiveController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/publication', [IndexController::class, 'publication']);
Route::get('/leadership-legacy', [IndexController::class, 'leadershipLegacy']);
Route::get('/share-your-thought', [IndexController::class, 'shareYourThought']);
// share your thought send mail
Route::post('/sendFeedback', [IndexController::class, 'sendFeedback']);

// Archive link check
Route::get('/archive', [ArchiveController::class, 'index']);

Route::get('/user-list', [UserInfoController::class, 'index']);
Route::get('/create-user', [UserInfoController::class, 'createUser']);
Route::post('/create-user', [UserInfoController::class, 'storeUser']);
Route::get('/show-user/{id}', [UserInfoController::class, 'show']);
Route::get('/edit-user/{id}', [UserInfoController::class, 'edit']);
Route::post('/update-user/{id}', [UserInfoController::class, 'update']);
Route::post('/is-user-activated/{id}', [UserInfoController::class, 'updateUserActivate']);

// Registration routes 
Route::get('/reg', [UserInfoController::class, 'create']);
Route::post('/reg', [UserInfoController::class, 'store']);

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'loginUser']);

//otp verified 
Route::get('/otp/{user_id}', [LoginController::class, 'showOtpForm'])->name('otp.form');
Route::post('/otp/verify', [LoginController::class, 'verifyOTP'])->name('otp.verify');

// Logout route
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard (only for authenticated users)
Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth')->name('dashboard.dashboard');

Route::get('/all-publish/{itemName?}', [PublishController::class, 'index']);
Route::get('/add-publish', [PublishController::class, 'create']);
Route::post('/add-publish', [PublishController::class, 'store']);
Route::get('/show-publish/{id}', [PublishController::class, 'show']);
Route::get('/edit-publish/{id}', [PublishController::class, 'edit']);
Route::post('/update-publish/{id}', [PublishController::class, 'update']);
Route::post('/is-shown-publish/{id}', [PublishController::class, 'updateIsShown']);
Route::post('/is-featured-publish/{id}', [PublishController::class, 'updateIsFeatured']);

Route::get('/all-leadership/{itemName?}', [LeadershipController::class, 'index']);
Route::get('/add-leadership', [LeadershipController::class, 'create']);
Route::post('/add-leadership', [LeadershipController::class, 'store']);
Route::get('/show-leadership/{id}', [LeadershipController::class, 'show']);
Route::get('/edit-leadership/{id}', [LeadershipController::class, 'edit']);
Route::post('/update-leadership/{id}', [LeadershipController::class, 'update']);
Route::post('/is-shown-leadership/{id}', [LeadershipController::class, 'updateIsShown']);
Route::post('/is-featured-leadership/{id}', [LeadershipController::class, 'updateIsFeatured']);

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
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\ArchiveController;

use Illuminate\Support\Facades\Mail;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/publication', [PublicationController::class, 'index']);
Route::get('/leadership-legacy', [LeadershipLegacyController::class, 'index']);
Route::get('/share-your-thought', [ShareYourThoughtController::class, 'index']);

Route::get('/user-list', [UserInfoController::class, 'index']);
Route::get('/create-user', [UserInfoController::class, 'createUser']);
Route::post('/create-user', [UserInfoController::class, 'storeUser']);
Route::get('/show-user/{id}', [UserInfoController::class, 'show']);
// Route::get('/edit-user/{id}', [UserInfoController::class, 'edit']);
// Route::post('/update-user/{id}', [UserInfoController::class, 'update']);

Route::post('/is-user-activated/{id}', [UserInfoController::class, 'updateUserActivate']);

Route::get('/reg', [UserInfoController::class, 'create']);
Route::post('/reg', [UserInfoController::class, 'store'])->name('userInfo.store');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginUser'])->name('login.submit');

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

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// share your thought send mail
Route::post('/feedback/send', [FeedbackController::class, 'send'])->name('feedback.send');
// Route::get('/test-mail', function () {
//     Mail::raw('This is a test email from Laravel', function ($message) {
//         $message->to('rahmantareq11@example.com')
//             ->subject('Test Mail');
//     });

//     return 'Test email sent!';
// });


// Archive link check
Route::get('/archive', [ArchiveController::class, 'index'])->name('archive');

// Dashboard (protected)
// Route::get('/dashboard', [ArchiveController::class, 'dashboard'])
//     ->middleware('auth')
//     ->name('dashboard.dashboard');  // your existing dashboard route name
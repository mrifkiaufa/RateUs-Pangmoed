<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\LeadingPageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LeadingPageController::class, 'index']);
Route::post('/login', [AuthController::class, 'showLoginPage']);
Route::get('/login', [AuthController::class, 'showLoginPage']);
Route::post('/logged', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/token', [TokenController::class, 'generate']);
Route::get('/token', [TokenController::class, 'index']);
Route::post('/feedback/{id}', [ReviewController::class, 'storeReview']);
Route::get('/feedback/{id}', [ReviewController::class, 'showFeedbackForm']);
Route::get('/review/{id}', [ReviewController::class, 'showReviewPage']);
Route::post('/email/{id}', [EmailController::class, 'sendEmail']);
Route::get('/email/{id}', [EmailController::class, 'index']);


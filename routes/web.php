<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [pageController::class, 'welcome']);
Route::get('/courses', [pageController::class, 'courses']);
Route::get('/course', [pageController::class, 'course']);
Route::get('/register', [pageController::class, 'register']);
Route::get('/login', [pageController::class, 'login']);
Route::get('/instructorR', [pageController::class, 'instructorRegister']);

// Admin controller

Route::get('/adminlogin', [Admincontroller::class, 'instructorLogin']);
Route::get('/dashboard1', [Admincontroller::class, 'dashboard1']);
Route::get('/courses1', [Admincontroller::class, 'courses1']);
Route::get('/profile1', [Admincontroller::class, 'studentprofile']);
Route::get('/profile_complete', [Admincontroller::class, 'profile_complete']);




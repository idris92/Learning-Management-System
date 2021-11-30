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

Route::match(['get','post'],'/', [pageController::class, 'welcome']);
Route::match(['get','post'],'/courses', [pageController::class, 'courses']);
Route::match(['get','post'],'/course', [pageController::class, 'course']);
Route::match(['get','post'],'/register', [pageController::class, 'register']);
Route::match(['get','post'],'/login', [pageController::class, 'login']);
Route::match(['get','post'],'/instructorR', [pageController::class, 'instructorRegister']);

// Admin controller

Route::match(['get','post'],'/adminlogin', [Admincontroller::class, 'instructorLogin']);
Route::match(['get','post'],'/dashboard1', [Admincontroller::class, 'dashboard1']);
Route::match(['get','post'],'/courses1', [Admincontroller::class, 'courses1']);
Route::match(['get','post'],'/add_course', [Admincontroller::class, 'addcourse'])->name('add_course');
Route::match(['get','post'],'/add_course1', [Admincontroller::class, 'addcourse1']);
Route::match(['get','post'],'/profile1', [Admincontroller::class, 'profile']);
Route::match(['get','post'],'/adminprofile', [Admincontroller::class, 'adminprofile'])->name('adminprofile');
Route::match(['get','post'],'/adp_complete', [Admincontroller::class, 'adminprofilecomplete']);
Route::match(['get','post'],'/admin_allcourses', [Admincontroller::class, 'admin_allcourses']);
Route::match(['get','post'],'/all_instructor', [Admincontroller::class, 'all_instructor'])->name('instructors');
Route::match(['get','post'],'/dashboard2', [Admincontroller::class, 'instructordashboard'])->name('instructordashboard');
Route::match(['get','post'],'/profile_complete', [Admincontroller::class, 'profile_complete'])->name('profile_complete');
Route::get('/logout', function(){
    if(session()->has('status')){
        session()->flush('status');
    }
    return redirect('/adminlogin');
    
});


Route::match(['get','post'],'/learn', [Admincontroller::class, 'learn']);

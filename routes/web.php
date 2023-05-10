<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentification
// Route::get('login', [LoginController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('/logouts', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout.method');

// Home Page
Route::get('/', [ViewController::class, 'homePage'])->name('home.page');
// Shop Page
Route::get('/shop', [ViewController::class, 'shopPage'])->name('shop.page');

Auth::routes();

// DASHBOARD ROUTE
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', [ViewController::class, 'dashboardPage'])->name('dashboard')->middleware('auth');
    Route::get('/profile', [ViewController::class, 'editProfile'])->name('profile.edit')->middleware('auth');
    Route::post('profile/update/', [UserController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/product', [ViewController::class, 'allProducts'])->name('all.products');
    // Users update
    Route::resource('users', UserController::class)->middleware('auth');

});

// STATS & CHART
Route::get('dashboard/statistic', [UserController::class, 'genderStats'])->name('user.statistic');

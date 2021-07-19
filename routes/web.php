<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ReviewGroupController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::post('/send_review', [SiteController::class, 'store']);

Auth::routes([
    'register' => false,
    'reset' => true,
    'verify' => false,
]);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('review_groups', ReviewGroupController::class);
        Route::resource('reviews', ReviewController::class);
    });

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function() {
        Route::resource('users', UserController::class);
    });
});


<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ReviewGroupController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => true,
    'verify' => false,
]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('review_groups', ReviewGroupController::class);
        Route::resource('reviews', ReviewController::class);
    });
});

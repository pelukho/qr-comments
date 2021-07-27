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

Route::post('/send_review', [SiteController::class, 'store']);
Route::get('login', function (){
   return redirect(url('/ru/login'));
});

Route::get('/', function (){
    return redirect(url('/ru'));
});

Route::group(['prefix' => '{locale?}'], function() {
    Route::get('/', [SiteController::class, 'index'])->name('home');

    Auth::routes([
        'register' => false,
        'reset' => true,
        'verify' => false,
    ]);
});


Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('review_groups', ReviewGroupController::class);
        Route::resource('reviews', ReviewController::class);
        Route::resource('dashboard', DashboardController::class);
    });

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function() {
        Route::resource('users', UserController::class);
    });

    Route::get('/admin/user/{id}/edit', [UserController::class, 'settings'])->name('admin.user.edit');
    Route::put('/admin/user/{id}/updateSettings', [UserController::class, 'updateSettings'])->name('admin.user.updateSettings');
});


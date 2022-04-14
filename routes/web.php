<?php

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
    return view('coming soon/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dashboard
Route::group( [   'middleware' => ['auth'] ], function() {
    //index page
    Route::get('/dashboard', function () {
        return view('admin/index');
    });

    //jobs route
    Route::get('/dashboard/jobs', [App\Http\Controllers\JobController::class, 'index']);
    Route::get('/dashboard/jobs/add', [App\Http\Controllers\JobController::class, 'create']);
    Route::post('/dashboard/jobs', [App\Http\Controllers\JobController::class, 'store']);
    Route::get('/dashboard/jobs/{id}', [App\Http\Controllers\JobController::class, 'show']);
    Route::delete('/dashboard/jobs/{id}', [App\Http\Controllers\JobController::class, 'destroy']);

    //categories route
    Route::get('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('/dashboard/categories/add', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::post('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'store']);
    Route::get('/dashboard/categories/{id}', [App\Http\Controllers\CategoryController::class, 'show']);
    Route::delete('/dashboard/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

    //super admin role
    Route::group(['middleware' => ['role:user']], function () {
    });
});

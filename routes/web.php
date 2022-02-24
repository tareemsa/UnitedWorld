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

Route::group( [   'middleware' => ['auth'] ], function() {


    Route::get('/dashboard', function () {
        return view('admin/index');
    });
    Route::get('/dashboard/jobs', [App\Http\Controllers\JobController::class, 'index']);
    Route::get('/dashboard/jobs/add', [App\Http\Controllers\JobController::class, 'create']);
    Route::post('/dashboard/jobs', [App\Http\Controllers\JobController::class, 'store']);
    Route::get('/dashboard/jobs/{id}', [App\Http\Controllers\JobController::class, 'show']);
    Route::group(['middleware' => ['role:user']], function () {
    });
    Route::get('/dashboardssss', function () {
        return view('admin/index');
    });
});

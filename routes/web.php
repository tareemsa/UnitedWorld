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

/*Route::get('/', function () {
    return view('coming soon/index');
});*/

Auth::routes();



Route::get('/registeruser', [App\Http\Controllers\UserController::class, 'CreateUser'])->name('registeruser');
Route::post('/registeruser', [App\Http\Controllers\UserController::class, 'StoreUser'])->name('StoreUser');
Route::post('/registercompany', [App\Http\Controllers\UserController::class, 'StoreCompany'])->name('StoreCompany');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

//dashboard
Route::group( [   'middleware' => ['auth'] ], function() {
    //index page
    Route::get('/', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\ProjectController::class, 'index']);

    //projects route
    Route::get('/dashboard/projects', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/dashboard/projects/add', [App\Http\Controllers\ProjectController::class, 'create']);
    Route::post('/dashboard/projects', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::get('/dashboard/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show']);
    Route::delete('/dashboard/projects/{id}', [App\Http\Controllers\ProjectController::class, 'destroy']);

    //super admin role
    Route::group(['middleware' => ['role:user']], function () {
    });
});

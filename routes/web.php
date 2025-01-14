<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MatchController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
*/

Auth::routes();

// Register user and company routes
Route::get('/registeruser', [UserController::class, 'CreateUser'])->name('registeruser');
Route::post('/registeruser', [UserController::class, 'StoreUser'])->name('StoreUser');
Route::post('/registercompany', [UserController::class, 'StoreCompany'])->name('StoreCompany');

// Language switch route (can be outside the auth group if accessible to all users)
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// Dashboard routes (protected by auth middleware)
Route::group(['middleware' => ['auth']], function () {

    // Home/Index page
    Route::get('/', [ProjectController::class, 'index']);
    Route::get('/home', [ProjectController::class, 'index']);

    // Project routes
    Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/dashboard/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/dashboard/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::get('/dashboard/projects/add', [ProjectController::class, 'create']);
    Route::post('/dashboard/projects', [ProjectController::class, 'store']);
    Route::get('/dashboard/projects/{id}', [ProjectController::class, 'show']);
    Route::delete('/dashboard/projects/{id}', [ProjectController::class, 'destroy']);

    // Order routes
    Route::get('/dashboard/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/dashboard/orders/add', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/dashboard/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/dashboard/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/dashboard/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/dashboard/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
    Route::delete('/dashboard/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
Route::post('orders/{id}/restore', [OrderController::class, 'restore'])->name('orders.restore');
Route::delete('orders/{id}/force-delete', [OrderController::class, 'forceDelete'])->name('orders.forceDelete');

//match 


Route::get('/matches', [MatchController::class, 'index'])->name('match.index');
Route::post('/matches/filter', [MatchController::class, 'filter'])->name('match.filter');




});

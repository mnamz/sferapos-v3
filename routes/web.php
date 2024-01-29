<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::post('/client', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/client/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('client.destroy');


    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn () => view('dashboard'))->name('home');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

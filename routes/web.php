<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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
// Page routes
Route::get('/', [BlogController::class, 'index']);

Route::get('post/{id}', [BlogController::class, 'postIndex'])->name('PI');

Route::get('/allpost', [BlogController::class, 'allpost'])->name('all');

// Function routes
Route::post('createPost', [BlogController::class, 'createPost'])->name('create');

Route::get('/search', [BlogController::class, 'search'])->name('search');

Route::delete('delPost', [BlogController::class, 'delPost'])->name('delete');

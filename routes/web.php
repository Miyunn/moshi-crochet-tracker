<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicConfigController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/quotation', function () {
    return view('quotation');
})->middleware(['auth', 'verified'])->name('quotation');

Route::middleware('auth')->group(function () {
    Route::get('/config', [BasicConfigController::class, 'edit'])->name('config.edit');
    Route::patch('/config', [BasicConfigController::class, 'update'])->name('config.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/yarn', [BasicConfigController::class, 'edit'])->name('yarn.index');
    Route::patch('/yarn', [BasicConfigController::class, 'update'])->name('yarn.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

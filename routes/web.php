<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicConfigController;
use App\Http\Controllers\YarnController;
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

// Landing page route
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Quotation generatoin routes
Route::get('/quotation', function () {
    return view('quotation.index');
})->middleware(['auth', 'verified'])->name('quotation.index');


// Baisc Config routes
Route::middleware('auth')->group(function () {
    Route::get('/config', [BasicConfigController::class, 'edit'])->name('config.edit');
    Route::patch('/config', [BasicConfigController::class, 'update'])->name('config.update');
});


// Yarn Config routes
/*
Route::get('/yarn', function () {
    return view('yarn.index');
})->middleware(['auth', 'verified'])->name('yarn.index');
 */

//Yarn Config (CRUD)
Route::middleware('auth')->group(function () {
    Route::get('/yarn', [YarnController::class, 'index'])->name('yarn.index');
    Route::post('/yarn', [YarnController::class, 'store'])->name('yarn.store');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

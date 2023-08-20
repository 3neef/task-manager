<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [TaskController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/task/create', [TaskController::class, 'store'])->name('task.store');
    Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('/task/edit/{task}', [TaskController::class, 'update'])->name('task.update');
    Route::get('/task/show/{task}', [TaskController::class, 'show'])->name('task.show');
    Route::get('/task/status/{task}', [TaskController::class, 'status'])->name('task.status');
    Route::put('/task/status/{task}', [TaskController::class, 'statusUpdate'])->name('task.statusUpdate');
    Route::delete('/task/delete/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
});

require __DIR__.'/auth.php';

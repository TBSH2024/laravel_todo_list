<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('index');

Route::prefix('tasks')->name('tasks.')->group(function () {
    Route::post('/', [TaskController::class, 'store'])->name('create');
    Route::post('{id}/move-to-trash', [TaskController::class, 'moveToTrash'])->name('moveToTrash');
    Route::put('{id}/recover', [TaskController::class, 'recover'])->name('recover');
    Route::delete('clear', [TaskController::class, 'clearTrash'])->name('clearTrash');
});

Route::get('trash', [TaskController::class, 'trash'])->name('trash');
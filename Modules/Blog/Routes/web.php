<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;

Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/', [BlogController::class, 'store'])->name('store');
    Route::get('/{id}', [BlogController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('destroy');
});

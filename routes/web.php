<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ExemplaryUserController;
use Illuminate\Support\Facades\Route;
 
    Route::get('/associate', [ExemplaryUserController::class, 'associate']);
    Route::post('associate/store',[ExemplaryUserController::class,'store'])->name('exemplary_user.store');


    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/book/{id}', [BookController::class, 'update'])->name('book.update');
    Route::delete('book/{book}',[BookController::class,'destroy'])->name('book.destroy');
    Route::get('book/{book}',[BookController::class,'show'])->name('book.show');
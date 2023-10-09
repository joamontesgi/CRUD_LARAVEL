<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;



Route::get('/',[AuthorsController::class,'index'])->name('authors.index');
Route::post('/authors',[AuthorsController::class,'store'])->name('authors.store');
Route::delete('/authors/{id}',[AuthorsController::class,'destroy'])->name('authors.destroy');
Route::put('/authors/{id}',[AuthorsController::class,'update'])->name('authors.update');
Route::get('/authors_edit/{id}',[AuthorsController::class,'edit'])->name('authors.edit');

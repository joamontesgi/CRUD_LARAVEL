<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;



Route::get('/',[AuthorsController::class,'index'])->name('authors.index');
Route::post('/authors',[AuthorsController::class,'store'])->name('authors.store');
Route::delete('/authors/{id}',[AuthorsController::class,'destroy'])->name('authors.destroy');
Route::put('/authors/{id}',[AuthorsController::class,'update'])->name('authors.update');
Route::get('/authors_edit/{id}',[AuthorsController::class,'edit'])->name('authors.edit');

Route::get('/books',[BooksController::class,'index'])->name('books.index');
Route::post('/books',[BooksController::class,'store'])->name('books.store');
Route::delete('/books/{id}',[BooksController::class,'destroy'])->name('books.destroy');
Route::put('/books/{id}',[BooksController::class,'update'])->name('books.update');
Route::get('/books_edit/{id}',[BooksController::class,'edit'])->name('books.edit');



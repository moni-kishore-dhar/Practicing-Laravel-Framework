<?php

use Illuminate\Support\Facades\Route;





Route::get('/',function(){
    return view('welcome');
});






// Route to AuthorsController:


use App\Http\Controllers\AuthorsController;

Route::get('/authors', [AuthorsController::class, 'index']);

Route::get('/authors/create', [AuthorsController::class, 'create']);

Route::post('/authors/create', [AuthorsController::class, 'store']);

Route::get('/authors/{id}/edit', [AuthorsController::class, 'edit']);

Route::patch('/authors/{id}/edit', [AuthorsController::class, 'update']); 

Route::delete('/authors/{id}/delete', [AuthorsController::class, 'destroy']);






// Route to BooksController:


use App\Http\Controllers\BooksController;

Route::get('/books', [BooksController::class, 'index']);

Route::get('/books/create', [BooksController::class, 'create']);

Route::post('/books/create', [BooksController::class, 'store']);

Route::get('/books/{id}/edit', [BooksController::class, 'edit']);

Route::patch('/books/{id}/edit', [BooksController::class, 'update']); 

Route::delete('/books/{id}/delete', [BooksController::class, 'destroy']);

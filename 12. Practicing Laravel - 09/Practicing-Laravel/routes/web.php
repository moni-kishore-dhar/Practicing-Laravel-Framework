<?php

use Illuminate\Support\Facades\Route;





Route::get('/',function(){
    return view('welcome');
});






// Route to UsersController:


use App\Http\Controllers\UsersController;

Route::get('/users', [UsersController::class, 'index']);

Route::get('/users/{id}/showProfile', [UsersController::class, 'showProfile']);

Route::get('/users/create', [UsersController::class, 'create']);

Route::post('/users/create', [UsersController::class, 'store']);

Route::get('/users/{id}/edit', [UsersController::class, 'edit']);

Route::patch('/users/{id}/edit', [UsersController::class, 'update']); 

Route::delete('/users/{id}/delete', [UsersController::class, 'destroy']);






// Route to ProfilesController:


use App\Http\Controllers\ProfilesController;

Route::get('/profiles', [ProfilesController::class, 'index']);

Route::get('/profiles/{id}/edit', [ProfilesController::class, 'edit']);

Route::patch('/profiles/{id}/edit', [ProfilesController::class, 'update']); 
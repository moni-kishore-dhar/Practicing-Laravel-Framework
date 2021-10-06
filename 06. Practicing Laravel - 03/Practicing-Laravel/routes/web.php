<?php

use Illuminate\Support\Facades\Route;






//Grouping of Route (With Returning to Controller)





use App\Http\Controllers\MathController;     


Route::group(['prefix' => 'math'],function(){

    
    Route::get('/',[MathController::class, 'math']);

    Route::get('/sum/{num1}/{num2}',[MathController::class, 'sum']);

    Route::get('/sub/{num1}/{num2}',[MathController::class, 'sub']);

    Route::get('/mul/{num1}/{num2}',[MathController::class, 'mul']);

    Route::get('/div/{num1}/{num2}',[MathController::class, 'div']);


});


















// Route to SiteController:




use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/blog', [SiteController::class, 'blog']);
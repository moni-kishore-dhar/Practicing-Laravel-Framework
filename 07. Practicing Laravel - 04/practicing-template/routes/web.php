<?php

use Illuminate\Support\Facades\Route;






// Route to OnlineShopController:




use App\Http\Controllers\OnlineShopController;

Route::get('/', [OnlineShopController::class, 'home']);
Route::get('/product', [OnlineShopController::class, 'product']) -> name('product');
Route::get('/why_us', [OnlineShopController::class, 'why_us']) -> name('why_us');
Route::get('/about', [OnlineShopController::class, 'about']);


<?php

use Illuminate\Support\Facades\Route;




Route::get('/',function(){
    return view('welcome');
});





// Route to ProfileController:


use App\Http\Controllers\ProfileController;


Route::get('/profile', [ProfileController::class, 'profile']);






// Route to PersonController:


use App\Http\Controllers\PersonController;



Route::get('/person', [PersonController::class, 'person']);



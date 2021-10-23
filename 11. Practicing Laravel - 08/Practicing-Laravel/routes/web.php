<?php

use Illuminate\Support\Facades\Route;





Route::get('/',function(){
    return view('welcome');
});






// Route to CountriesController:


use App\Http\Controllers\CountriesController;

Route::get('/countries', [CountriesController::class, 'showAllCountry']);

Route::get('/countries/details/{id}', [CountriesController::class, 'showCountryDetails']);

Route::get('/countries/create', [CountriesController::class, 'create']);

Route::post('/countries/create', [CountriesController::class, 'store']);

Route::get('/countries/{id}/edit', [CountriesController::class, 'edit']);

Route::patch('/countries/{id}/edit', [CountriesController::class, 'update']);          

Route::delete('/countries/{id}/delete', [CountriesController::class, 'destroy']);






// Route to PersonsController:


use App\Http\Controllers\PersonsController;

Route::get('/persons', [PersonsController::class, 'index']);

Route::get('/persons/details/{id}', [PersonsController::class, 'showPersonDetails']);

Route::get('/persons/create', [PersonsController::class, 'create']);

Route::post('/persons/create', [PersonsController::class, 'store']);

Route::get('/persons/{id}/edit', [PersonsController::class, 'edit']);

Route::patch('/persons/{id}/edit', [PersonsController::class, 'update']); 

Route::delete('/persons/{id}/delete', [PersonsController::class, 'destroy']);
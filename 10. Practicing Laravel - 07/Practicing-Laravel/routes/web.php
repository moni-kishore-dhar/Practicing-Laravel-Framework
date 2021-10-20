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

//It is for the "Route Model Binding" approach:
//Route::get('/countries/{editable_country}/edit', [CountriesController::class, 'edit']);   

Route::get('/countries/{id}/edit', [CountriesController::class, 'edit']);

Route::patch('/countries/{id}/edit', [CountriesController::class, 'update']);          

Route::delete('/countries/{id}/delete', [CountriesController::class, 'destroy']);


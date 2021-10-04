<?php

use Illuminate\Support\Facades\Route;









//Returning to Controller from Route


/*

use App\Http\Controllers\MathController;     


Route::get('/sum/{number1}/{number2}',[MathController::class, 'sum']) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]);  

Route::get('/sub/{number1},{number2}',[MathController::class,'sub']) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]);

Route::get('/mul/{number1},{number2}',[MathController::class,'mul']) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]); 

*/







//Grouping of Route (Without Returning to Controller)


/*

Route::group(['prefix' => 'math'],function(){

    
    Route::get('/',function(){
        return "Math Home Function";
    });

    Route::get('/sum',function(){
        return "Sum Function";
    });

    Route::get('/sub',function(){
        return "Sub Function";
    });

    Route::get('/mul',function(){
        return "Mul Function";
    });

    Route::get('/div',function(){
        return "Div Function";
    });


});



Route::group(['prefix' => 'algebra'],function(){

    
    Route::get('/',function(){
        return "Algebra Home Function";
    });

    Route::get('/sum',function(){
        return "Sum Function";
    });

    Route::get('/sub',function(){
        return "Sub Function";
    });

    Route::get('/mul',function(){
        return "Mul Function";
    });

    Route::get('/div',function(){
        return "Div Function";
    });


});


*/










//Grouping of Route (With Returning to Controller)



use App\Http\Controllers\MathController;     


Route::group(['prefix' => 'math'],function(){

    
    Route::get('/',[MathController::class, 'math']);

    Route::get('/sum/{num1}/{num2}',[MathController::class, 'sum']);

    Route::get('/sub/{num1}/{num2}',[MathController::class, 'sub']);

    Route::get('/mul/{num1}/{num2}',[MathController::class, 'mul']);

    Route::get('/div/{num1}/{num2}',[MathController::class, 'div']);


});









use App\Http\Controllers\CountryController;  


//Routing to Resource Controller one by one:

/*
Route::get('country',[CountryController::class, 'index']);
Route::get('country/create',[CountryController::class, 'create']);
Route::post('country/create',[CountryController::class, 'store']);
*/





//Routing to Resource Controller all together:

Route::resource('country', CountryController::class);           //Resource Route






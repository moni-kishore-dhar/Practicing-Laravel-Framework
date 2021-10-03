<?php

use Illuminate\Support\Facades\Route;



//Returning and Printing String from Route directly



/*

Route::get('/', function () {
    return "<center><h1>Welcome to my Site</h1></center>"; 
});



Route::get('/about',function(){
    return "<center><h1>This is About Page</center></h1>";

});



Route::get('/about/service',function(){
    return "<center><h1>This is Service Page</center></h1>";

});



route::get('/contact',function(){
    $a=50+90;
   
    return "<center><h1>".$a." This is Contact Page</center></h1>";
});


*/












//Returning to View from Route




Route::get('/',function(){
    return view('welcome'); 
}) -> name('Homepage');      //Giving a name to route



Route::get('/about',function(){
    return view('about');
}) -> name('Aboutpage');       //Giving a name to route



Route::get('/contact',function(){
    return view('contact');
}) -> name('Contactpage');            //Giving a name to route












//Passing Data through URL




/*

Route::get('/about/{name}',function($name){
    
    $name= strtoupper($name);  //Converting string to upper case
    return $name;

});



Route::get('/sum/{number1}/{number2}',function($number1, $number2){
    
    $sum = $number1 + $number2;
    return $sum;

}) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]);  //Giving Some restriction. It will accept only number.




Route::get('/sub/{number1},{number2}',function($number1, $number2){
    
    $sub = $number1 - $number2;
    return $sub;

}) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]);




Route::get('/mul/{number1},{number2}',function($number1, $number2){
    
    $mul = $number1 * $number2;
    return $mul;

}) -> where(['number1' => '[1,2,3]' , 'number2' => '[1,2,3]' ]);   //It will accept only 1,2 or 3.




*/






//Returning to Controller from Route





use App\Http\Controllers\MathController;     


Route::get('/sum/{number1}/{number2}',[MathController::class, 'sum']) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]);  

Route::get('/sub/{number1},{number2}',[MathController::class,'sub']) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]);

Route::get('/mul/{number1},{number2}',[MathController::class,'mul']) -> where(['number1' => '[0-9]+' , 'number2' => '[0-9]+' ]); 


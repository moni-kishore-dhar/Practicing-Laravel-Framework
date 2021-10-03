<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





//Returning to Controller directly (Without using View). 



/*


class MathController extends Controller
{
    

    public function sum($number1,$number2)
    {
        return $number1 + $number2;
        
    }


    public function sub($number1,$number2)
    {
        $sub= $number1-$number2;
        return $sub;
    }



    public function mul($number1,$number2)
    {
        $mul=$number1 * $number2;
        return $mul;
    }


}

*/






//Returning to View (with data) from controller



class MathController extends Controller
{
    

    public function sum($number1,$number2)
    {
        $sum= $number1 + $number2;
        return view('sum',[ 'result' => $sum, 'number1' => $number1, 'number2' => $number2 ]);  //Passing the data with the help of Associative Array
        
    }


    public function sub($number1,$number2)
    {
        $sub= $number1-$number2;
        return view('sub',[ 'result' => $sub, 'number1' => $number1, 'number2' => $number2 ]);  //Passing the data with the help of Associative Array
    }



    public function mul($number1,$number2)
    {
        $mul=$number1 * $number2;
        return view('mul',[ 'result' => $mul, 'number1' => $number1, 'number2' => $number2 ]);  //Passing the data with the help of Associative Array
    }


}



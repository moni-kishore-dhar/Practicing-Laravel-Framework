<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;











//Without returning to View

/*

class MathController extends Controller
{

    
    public function math()
    {
        return "Math Home Function";
    }
    
    public function sum()
    {
        return "Sum Function";
    }

    public function sub()
    {
        return "Sub Function";
    }

    public function mul()
    {
        return "Mul Function";
    }

    public function div()
    {
        return "Div Function";
    }
    

}

*/











//Returning to View



class MathController extends Controller
{

    
    public function math()
    {
        
        //Use to see all requested for Debugging:
        //dd(request());

        //To See the Path:
        //$path = request() -> path();
        //return $path;

        //To see the whole URL:
        // $url = request() -> url();
        //return $url;

        //To see the requested Method:
        // $method = request() -> method();
        //return $method;


        return view('math');                            //Returning to View without passing the Data
   
    }
    
    public function sum($num1,$num2)
    {
        $result= $num1 + $num2;                                                           //Technique: 01
        return view('sum',['res' => $result, 'num1' => $num1, 'num2' => $num2]);         //Passing the Data using Associative Array  
    }

    public function sub($num1,$num2)
    {
        $result= $num1 - $num2;
        $data=['res' => $result, 'num1' => $num1, 'num2' => $num2];                  //Technique: 02
        return view('sub', $data);                                                  //Passing the Data using Associative Array
    }

    public function mul($num1,$num2)
    {
        $result= $num1 * $num2;                                                                            //Technique: 03
        return view('mul') -> with('res',$result) -> with('num1',$num1) -> with('num2',$num2) ;           //Passing the Data using With Method
    }

    public function div($num1,$num2)
    {
        $result= $num1 / $num2;                                                    //Technique: 04
        return view('div', compact('result' , 'num1' , 'num2'));                  //Passing the Data using Compact Method
    }
    

}




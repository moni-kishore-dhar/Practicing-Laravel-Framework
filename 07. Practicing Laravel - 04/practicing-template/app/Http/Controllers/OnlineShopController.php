<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class OnlineShopController extends Controller
{
    
    
    public function home()
    {
        return view('online_shop.home');
    }

   
    public function product()
    {
        return view('online_shop.product');
    }


    public function why_us()
    {
        return view('online_shop.why_us');
    }

    
    public function about()
    {
        return view('online_shop.about');
    }




}

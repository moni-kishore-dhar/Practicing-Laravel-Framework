@extends('layout.master')
   




<!--   Title:   -->
@section('title' , 'Contact Page')   
   


<!--   Content:   -->
@section('content') 
    
    <h1>Contact Page</h1>
    
    <h4>Welcome to contactpage</h4>
  
    

    
    <!--   A contact form has been included:    -->
    @include('partials_layout.contact_form')
   




@endsection






<!--   For Internal CSS:   -->
@section('style')
    
    <style>

        body{
            font-style: italic;
        }
    
    </style>

@endsection
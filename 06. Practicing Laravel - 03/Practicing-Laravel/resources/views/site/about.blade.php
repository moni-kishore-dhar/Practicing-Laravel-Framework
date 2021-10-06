@extends('layout.master')
   

<!--   Title: -->
@section('title' , 'About Page')   
   

  

<!--   Content:   -->
@section('content') 
    
    <h1>About Page</h1>
    
    <h4>Welcome to aboutpage</h4>

 


    <!--   A contact form has been included:   -->
    @include('partials_layout.contact_form')
  

    


@endsection
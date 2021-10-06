@extends('layout.master')
   
   


<!--   Title:  -->
@section('title' , 'Home Page')   




 <!--  Content:    -->
@section('content') 
    
    <h1>Home Page</h1>

    <h4>Welcome to homepage</h4>

    


    <!--   A value has been sent for the contact form: -->
    @include('partials_layout.contact_form_with_value' , ["name" => "Kishor"])


    

@endsection
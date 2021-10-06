@extends('layout.master')



<!--   Title:   -->
@section('title' , 'Blog Page')



<!--   Content: -->
@section('content')

    <h1>Blog Page</h1>


    <h4>This is a Blog Page</h4>



    <!--   Component:   -->
    @component('components.alert')


 

    
        <!--   For title in alert component:     -->
        @slot('title')
        
            This is alert title

        @endslot




        <!--   For body in alert component:   -->
        <h3> Something Error </h3>
        <small> Status code 404 </small>  




    @endcomponent





    
@endsection





@section('blog_field')

  
    <!--   It is used to print the original content of the blog_field section in the master layout:   -->
    <!--    @parent        -->



    <p>This is blog lorem text</p>   




@endsection



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


       <!--  Adding Bootstrap from the Internet:  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">  
    

    
    <!--   External CSS from the Public Folder:   -->
    <link rel="stylesheet" href="/css/style.css">

    

    <!--   For the Inline CSS:   -->
    @yield('style')



    <!-- For Title:   -->
    <title> @yield('title') </title>




</head>

<body>

    <div class="container" style="margin-top: 50px;">

       

        <h1>Practicing of Layout in Laravel</h1>


        <br><br><br>

    
    
        <!--    A partial layout is included for the navigation bar:   -->
        <h2> @include('partials_layout.menu') </h2>
   



        <!--   For Content:   -->
        @yield('content')




        @section('blog_field')
            
            <p>Lorem Text</p>

        @show


    </div>






    <!--   For Javascript:   -->
    @yield('script')



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1><center> This is About Page </center></h1>


    
    {{-- Without Using Route Name --}} 

    <a href="/">Homepage</a>
    <a href="/contact">Contact</a>


    <br><br>




    {{-- Using Route Name --}} 

    <a href="{{ route('Homepage') }}">Homepage</a>
    <a href="{{ route('Contactpage') }}">Contact</a>





</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>Person</title>
</head>

<body>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px; text-align: center;">

        <h1>Person Details:</h1><br>
       
        <h2> Person Name: {{ $person_details->name }} </h2>
        
        <h4> Email: {{ $person_details->email }}</h4>
        <h5> Phone: {{ $person_details->phone }}</h5><br>


        <h5>This person belongs to:</h5>
        <h5> Country: {{ $person_details->country->name }}</h5>
        <h5> Capital: {{ $person_details->country->capital }}</h5><br>
        

        
        <h5> Created At:</h5>
            <h5>Time: {{ $person_details->created_at -> format('h:i:s A') }}</h5>
            <h5>Day: {{ $person_details->created_at -> format('D') }}</h5>
            <h5>Date: {{ $person_details->created_at -> format('d-m-y') }}</h5><br>

        <h5> Updated At:</h5>
            <h5>Time: {{ $person_details->updated_at -> format('H:i:s') }}</h5>
            <h5>Day: {{ $person_details->updated_at -> format('D') }}</h5>
            <h5>Date: {{ $person_details->updated_at -> format('d-M-Y') }}</h5><br>

        <h5>Posted On: {{ $person_details->created_at->diffForHumans() }}</h5>
        <h5>Updated On: {{ $person_details->updated_at->diffForHumans() }}</h5>

     
        <br><br>



        <a href="/persons/{{ $person_details->id }}/edit"  class="btn btn-primary btn-bg">Edit</a>
       

  
       
    </div>
    
</body>
</html>
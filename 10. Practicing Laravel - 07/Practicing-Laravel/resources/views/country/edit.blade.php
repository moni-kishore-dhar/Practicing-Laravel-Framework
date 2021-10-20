<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>Country</title>
</head>

<body>

    <div class="container" style="margin-top: 100px;">

        <h1>Edit Country</h1><br>

        <form action="/countries/{{$editable_country->id}}/edit" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
        
          
     
            
            <!--             
            By default HTML support only GET requests and Form support only GET & POST requests.
            For other requests or methods like PUT, PATCH & DELETE we need to configure or modify them by using:  @method('<Request_Name>')
            -->

            @method('patch')                 <!--  Here, it is used for updates.  -->



            <div class="form-group">
                <label for="">Country Name</label>
                <input type="text" name="name" class="form-control" value= "{{ $editable_country->name }}">
            </div>

            <div class="form-group">
                <label for="">Capital Name</label>
                <input type="text" name="capital" class="form-control" value= "{{ $editable_country->capital }}">
            </div>
            
            <div class="form-group">
                <label for="">Currency Name</label>
                <input type="text" name="currency" class="form-control" value= "{{ $editable_country->currency }}">
            </div>

            <div class="form-group">
                <label for="">Population</label>
                <input type="text" name="population" class="form-control" value= "{{ $editable_country->population }}">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>


        </form>

    </div>
    
</body>
</html>
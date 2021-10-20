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

        <h1>Create Country</h1><br>

        <form action="/countries/create" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
          

            <div class="form-group">
                <label for="">Country Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Capital Name</label>
                <input type="text" name="capital" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Currency Name</label>
                <input type="text" name="currency" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Population</label>
                <input type="text" name="population" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Create Country</button>


        </form>

    </div>
    
</body>
</html>
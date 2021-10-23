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

    <div class="container" style="margin-top: 100px;">

        <h1>Create Person</h1><br>

        <form action="/persons/create" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
          

            <div class="form-group">
                <label for="">Person Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Country Name</label>
                <select name="country_id" id="country_id" class="form-control">
                    <option value="">Select Your Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name}}</option>               
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Create Person</button>


        </form>

    </div>
    
</body>
</html>
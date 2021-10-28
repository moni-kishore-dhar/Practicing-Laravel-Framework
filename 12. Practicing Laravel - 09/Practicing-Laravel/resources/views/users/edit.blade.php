<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>User</title>
</head>

<body>

    <div class="container" style="margin-top: 100px;">

        <h1>Edit User Information</h1><br>

        <form action="/users/{{$editable_user->id}}/edit" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
        
          
     
            
            <!--             
            By default HTML support only GET requests and Form support only GET & POST requests.
            For other requests or methods like PUT, PATCH & DELETE we need to configure or modify them by using:  @method('<Request_Name>')
            -->

            @method('patch')                 <!--  Here, it is used for updates.  -->



            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="firstname" class="form-control" value= "{{ $editable_user->firstname }}">
            </div>

            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="lastname" class="form-control" value= "{{ $editable_user->lastname }}">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value= "{{ $editable_user->email }}">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control" value= "{{ $editable_user->phone }}">
            </div>

            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="text" name="date_of_birth" class="form-control" value= "{{ $editable_user->date_of_birth->format('d-m-Y') }}">
            </div>

            <div class="form-group">
                <label for="">User Name</label>
                <input type="text" name="user_name" class="form-control" value= "{{ $editable_user->user_name }}">
            </div>


    


            <button type="submit" class="btn btn-primary">Update</button>


        </form>

    </div>
    
</body>
</html>
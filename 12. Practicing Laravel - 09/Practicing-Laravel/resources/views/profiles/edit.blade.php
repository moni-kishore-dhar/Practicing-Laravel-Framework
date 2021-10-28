<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>Profile</title>
</head>

<body>

    <div class="container" style="margin-top: 100px;">

        <h1>Edit Profile Information</h1><br>

        <form action="/profiles/{{$editable_profile->id}}/edit" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
        
          
     
            
            <!--             
            By default HTML support only GET requests and Form support only GET & POST requests.
            For other requests or methods like PUT, PATCH & DELETE we need to configure or modify them by using:  @method('<Request_Name>')
            -->

            @method('patch')                 <!--  Here, it is used for updates.  -->



            <div class="form-group">
                <label for="">Profile Picture</label>
                <input type="text" name="profile_pic" class="form-control" value= "{{ $editable_profile->profile_pic }}">
            </div>

            <div class="form-group">
                <label for="">Bio</label>
                <input type="text" name="bio" class="form-control" value= "{{ $editable_profile->bio }}">
            </div>
            
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" value= "{{ $editable_profile->address }}">
            </div>

    

            <button type="submit" class="btn btn-primary">Update</button>


        </form>

    </div>
    
</body>
</html>
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

    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">

        <h1>Create User</h1><br>

        <form action="/users/create" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
          

            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
            </div>

            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control">
            </div>

            <div class="form-group">
                <label for="">User Name</label>
                <input type="text" name="user_name" class="form-control" placeholder="Enter User Name">
            </div>

            <br>
            <hr>
            <br>

            <h2>Profile Information</h2><br>

            <div class="form-group">
                <label for="">Profile Picture</label>
                <input type="text" name="profile_pic" class="form-control" placeholder="Enter Profile Picture">
            </div>

            <div class="form-group">
                <label for="">Bio</label>
                <input type="text" name="bio" class="form-control" placeholder="Enter Bio">
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address">
            </div>


            <br>
            <button type="submit" class="btn btn-primary">Create User</button>


        </form>

    </div>
    
</body>
</html>
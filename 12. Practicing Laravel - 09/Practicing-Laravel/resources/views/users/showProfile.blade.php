<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>User's Profile</title>
</head>

<body>

    <div class="container" style="margin-top: 100px;">

        <h1>Profile Details</h1><br>

        <div class="container bg-light" style="width: 70%; bg-color: red; text-align:center; ">
            
            <table class="table text-center">
                <tr>
                    <td><b>ID</b></td>
                    <td>{{ $user_data->id }}</td>
                </tr>
                <tr>
                    <td><b>First Name</b></td>
                    <td>{{ $user_data->firstname }}</td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td>{{ $user_data->lastname }}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>{{ $user_data->email }}</td>
                </tr>
                <tr>
                    <td><b>Phone</b></td>
                    <td>{{ $user_data->phone }}</td>
                </tr>
                <tr>
                    <td><b>Date of Birth</b></td>
                    <td>{{ $user_data->date_of_birth->diffForHumans() }}</td>
                </tr>
                <tr>
                    <td><b>User Name</b></td>
                    <td>{{ $user_data->user_name }}</td>
                </tr>
                <tr>
                    <td><b>Profile Picture</b></td>
                    <td>{{ $user_data->profile->profile_pic }}</td>
                </tr>
                <tr>
                    <td><b>Bio</b></td>
                    <td>{{ $user_data->profile->bio }}</td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td>{{ $user_data->profile->address }}</td>
                </tr>
            </table>

        </div>
            
        <br><br>   
        
        <div class="text-center">
            <div class="row">
                <div class="col-md-2">
                    <p>
                        <a href="{{ asset('/users') }}" class="btn btn-primary">See User List</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        <a href="{{ asset('/users/create') }}" class="btn btn-primary">Create New Users</a>     
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        <a href="/users/{{ $user_data->id }}/edit" class="btn btn-primary">Edit User Information</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        <a href="/profiles/{{ $user_data->profile->id }}/edit" class="btn btn-primary">Edit Profile Information</a>     
                    </p>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>
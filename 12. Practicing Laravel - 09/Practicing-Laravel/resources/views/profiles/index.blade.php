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

        <h1>Profiles List</h1><br>



        <div class="row">
            <div class="col-md-6" style="text-align: right;">
                <p>
                    <a href="{{ asset('/users') }}" class="btn btn-primary">See User List</a>
                </p>
            </div>
            <div class="col-md-6" style="text-align: left;">
                <p>
                    <a href="{{ asset(('/users/create')) }}" class="btn btn-primary">Create New Users</a>     
                </p>
            </div>
        </div>


        
        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Profile Picture</th>
                    <th>Bio</th>
                    <th>Address</th>
                    <th>Owner's First Name</th>  
                    <th>Owner's Last Name</th>              
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($profiles_data as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->profile_pic }}</td>
                        <td>{{ $profile->bio }}</td>
                        <td>{{ $profile->address }}</td>
                        <td>{{ $profile->user->firstname}}</td>
                        <td>{{ $profile->user->lastname}}</td>

                        <td>
                            <div class="row">
                                
                                <div class="col-sm-7 text-right"  style="padding: 0px;">
                                    <a href="/users/{{ $profile->user->id }}/showProfile" class="btn btn-primary btn-sm" >Owner Details</a>            
                                </div>
                                
                                <div class="col-sm-1" style="text-align: center;">
                                    |
                                </div>
                                
                                <div class="col-sm-2 text-left"  style="padding: 0px;">
                                    <a href="/profiles/{{ $profile->id }}/edit" class="btn btn-success btn-sm">Edit</a>          
                                </div>
                            
                            </div>                       
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>



    </div>
    
</body>
</html>
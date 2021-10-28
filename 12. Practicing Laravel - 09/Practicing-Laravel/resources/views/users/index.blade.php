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

        <h1>Users List</h1><br>



        <div class="row">
            <div class="col-md-6" style="text-align: right;">
                <p>
                    <a href="{{ asset('/profiles') }}" class="btn btn-primary">See Profile List</a>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>User Name</th>                
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users_data as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>


                        <!--       $date_of_birth is not an object of the 'Carbon' class. So here, we can not use the method of 'Carbon' class like 'diffForHumans()'. For using the method of 'Carbon' class like 'diffForHumans()', we need to make $date_of_birth into an object of the 'Carbon' class manually, in the 'User' model.       -->
                        
                        <td>{{ $user->date_of_birth->diffForHumans() }}</td>  
                         
                        <td>{{ $user->user_name }}</td>

                        <td>
                            <div class="row">
                                
                                <div class="col-sm-3"  style="padding: 0px;">
                                    <a href="/users/{{ $user->id }}/showProfile" class="btn btn-primary btn-sm" >Profile</a>           <!--   It is a Get Request   -->   
                                </div>
                                
                                <div class="col-sm-1" style="text-align: center;">
                                    |
                                </div>
                                
                                <div class="col-sm-2"  style="padding: 0px;">
                                    <a href="/users/{{ $user->id }}/edit" class="btn btn-success btn-sm">Edit</a>           <!--   It is a Get Request   -->   
                                </div>
                                
                                <div class="col-sm-1" style="text-align: center;">
                                    |
                                </div>
                                
                                <div class="col-sm-2" style="padding:0px;">
                                    <form action="/users/{{ $user->id }}/delete" method="POST">               <!--  Here, We have to use 'Form' for modifying the request into Delete.      -->
                                        @csrf
                                        @method('delete')                                                             <!--   It is a Delete Request. Here, it is used for Delete.  -->
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>                            
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
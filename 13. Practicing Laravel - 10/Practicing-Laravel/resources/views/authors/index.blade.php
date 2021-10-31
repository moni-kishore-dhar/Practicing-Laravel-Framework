<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>Authors</title>
</head>

<body>

    <div class="container" style="margin-top: 100px;">

        <h1>Authors List</h1><br>



        <div class="row">
            <div class="col-md-6" style="text-align: right;">
                <p>
                    <a href="{{ asset('/books') }}" class="btn btn-primary">See Books List</a>
                </p>
            </div>
            <div class="col-md-6" style="text-align: left;">
                <p>
                    <a href="{{ asset(('/authors/create')) }}" class="btn btn-primary">Create New Authors</a>     
                </p>
            </div>
        </div>


        
        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>            
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($authors_data as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>{{ $author->phone }}</td>
        
                        <td>
                            <div class="row">
                                
                                <div class="col-sm-5 text-right"  style="padding: 0px;">
                                    <a href="/authors/{{ $author->id }}/edit" class="btn btn-success btn-sm">Edit</a>           <!--   It is a Get Request   -->   
                                </div>
                                
                                <div class="col-sm-1" style="text-align: center;">
                                    |
                                </div>
                                
                                <div class="col-sm-5 text-left" style="padding:0px;">
                                    <form action="/authors/{{ $author->id }}/delete" method="POST">               <!--  Here, We have to use 'Form' for modifying the request into Delete.      -->
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
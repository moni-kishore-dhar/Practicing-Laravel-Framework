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

        <h1>Country List</h1><br>

        <p>
            <a href="/countries/create" class="btn btn-primary">Create New Country</a>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Currency</th>
                    <th>Population</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($countries_data as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td> 
                            <a href="/countries/details/{{ $country->id }}"> {{ $country->name }} </a> 
                        </td>
                        <td>{{ $country->capital }}</td>
                        <td>{{ $country->currency }}</td>
                        <td>{{ $country->population }}</td>
                        <td>{{ $country->created_at->diffForHumans() }}</td>
                        <td>{{ $country->updated_at->format('h:i:s A  d-m-Y') }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3"  style="padding: 0px;">
                                    <a href="/countries/{{ $country->id }}/edit" class="btn btn-success btn-sm">Edit</a>           <!--   It is a Get Request   -->   
                                </div>
                                <div class="col-sm-1" style="text-align: center;">
                                    |
                                </div>
                                <div class="col-sm-3" style="padding:0px;">
                                     <form action="/countries/{{ $country->id }}/delete" method="POST">               <!--  Here, We have to use 'Form' for modifying the request into Delete.      -->
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
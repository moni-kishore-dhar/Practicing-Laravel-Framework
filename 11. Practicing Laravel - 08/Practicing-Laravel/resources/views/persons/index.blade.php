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

        <h1>Person List</h1><br>



        <div class="row">
            <div class="col-md-6" style="text-align: right;">
                <p>
                    <a href="{{ asset('/countries') }}" class="btn btn-primary">See Country List</a>
                </p>
            </div>
            <div class="col-md-6" style="text-align: left;">
                <p>
                    <a href="{{ asset(('/persons/create')) }}" class="btn btn-primary">Create New Person</a>     
                </p>
            </div>
        </div>


        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($persons_data as $person)
                    <tr>
                        <td>{{ $person->id }}</td>
                        <td> 
                            <a href="/persons/details/{{ $person->id }}"> {{ $person->name }} </a> 
                        </td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->phone }}</td>


                        <!--    <td>{{ $person->country_id }}</td>    -->               <!--       It will show country id       -->  

                        <td>{{ $person->country->name }}</td>                           <!--       Here, person is an object of the "Person" model. country also is an object of person, and name is under the country. country is defined in the 'Person' model       -->



                        <td>{{ $person->created_at->diffForHumans() }}</td>
                        <td>{{ $person->updated_at->format('h:i:s A  d-m-Y') }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3"  style="padding: 0px;">
                                    <a href="/persons/{{ $person->id }}/edit" class="btn btn-success btn-sm">Edit</a>           <!--   It is a Get Request   -->   
                                </div>
                                <div class="col-sm-1" style="text-align: center;">
                                    |
                                </div>
                                <div class="col-sm-3" style="padding:0px;">
                                     <form action="/persons/{{ $person->id }}/delete" method="POST">               <!--  Here, We have to use 'Form' for modifying the request into Delete.      -->
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
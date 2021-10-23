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

    <div class="container" style="margin-top: 100px; margin-bottom: 100px; text-align: center;">

        <h1>Country Details:</h1><br>
       
        <h2> Country Name: {{ $country_details->name }} </h2>
        
        <h4> Capital: {{ $country_details->capital }}</h4>
        <h5> Currency: {{ $country_details->currency }}</h5>
        <h5> Population: {{ $country_details->population }}</h5><br>
        
        <h5> Created At:</h5>
            <h5>Time: {{ $country_details->created_at -> format('h:i:s A') }}</h5>
            <h5>Day: {{ $country_details->created_at -> format('D') }}</h5>
            <h5>Date: {{ $country_details->created_at -> format('d-m-y') }}</h5><br>

        <h5> Updated At:</h5>
            <h5>Time: {{ $country_details->updated_at -> format('H:i:s') }}</h5>
            <h5>Day: {{ $country_details->updated_at -> format('D') }}</h5>
            <h5>Date: {{ $country_details->updated_at -> format('d-M-Y') }}</h5><br>

        <h5>Posted On: {{ $country_details->created_at->diffForHumans() }}</h5>

        <br><br><br>






        <!--      To print, the persons who live in this country:      -->


        <h5>People live in this country :</h5><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>


            <tbody>

                {{--
                
                
               <!--  Here, it will work when we use the query in CountriesController to find out the persons:   -->
                    
                @foreach ($persons_in_this_country as $person)
                    <tr>
                        <td>{{ $person->id }}</td> 
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->phone }}</td>
                    </tr>
                @endforeach


                --}}



                <!--      It will work when do not use any query in CountriesController:       -->

                @foreach ($country_details->persons as $person)                     <!--       Here, country_details is an object of the "Country" model. persons also is an object of country_details. persons are defined in the 'Country' model       -->
                    <tr>
                        <td>{{ $person->id }}</td>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->phone }}</td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>











        <br><br>



        <a href="/countries/{{ $country_details->id }}/edit"  class="btn btn-primary btn-bg">Edit</a>
       

  
       
    </div>
    
</body>
</html>
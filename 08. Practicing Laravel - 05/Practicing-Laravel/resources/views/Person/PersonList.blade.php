<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person List</title>
</head>
<body>
    <center>
        <h1>Person List</h1><br>
        
        <table border= "2">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
            </tr>

            @foreach ($person_list as $person)
                <tr>
                    <td> {{ $person->id }} </td>
                    <td> {{ $person->name }} </td>
                    <td> {{ $person->email }} </td>
                    <td> {{ $person->address }} </td>
                </tr>
            @endforeach



        </table>

        <h2> <a href=" {{ asset('/') }} ">Back</a> </h2>

        
    </center>
</body>
</html>
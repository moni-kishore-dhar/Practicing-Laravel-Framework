<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile List</title>
</head>
<body>
    <center>
        <h1>Profile List</h1><br>
        
        <table border= "2">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
            </tr>

            @foreach ($profile_list as $profile)
                <tr>
                    <td> {{ $profile->id }} </td>
                    <td> {{ $profile->name }} </td>
                    <td> {{ $profile->email }} </td>
                    <td> {{ $profile->address }} </td>
                </tr>
            @endforeach



        </table>

        <h2> <a href=" {{ asset('/') }} ">Back</a> </h2>

        
    </center>
</body>
</html>
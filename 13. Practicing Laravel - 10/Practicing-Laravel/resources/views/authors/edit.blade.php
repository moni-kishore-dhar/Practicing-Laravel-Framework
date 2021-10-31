<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>Edit Author</title>
</head>

<body>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">

        <h1>Edit Author</h1><br>

        <form action="/authors/{{ $author->id }}/edit" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
          
            @method('patch')


            <div class="form-group">
                <label for="name">Author Name</label>
                <input type="text" name="name" class="form-control" id="name" value=" {{$author->name}} ">
            </div>

            <div class="form-group">
                <label for="email">Author Email</label>
                <input type="email" name="email" class="form-control" id="email" value=" {{$author->email}} ">
            </div>
            
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" name="phone" class="form-control" id="phone" value=" {{$author->phone}} ">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Update</button>


        </form>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">

    <title>Edit Book</title>
</head>

<body>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">

        <h1>Edit Book</h1><br>

        <form action="/books/{{ $book->id }}/edit" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
          
            @method('patch')


            <div class="form-group">
                <label for="name">Book Name</label>
                <input type="text" name="name" class="form-control" id="name" value=" {{$book->name}} ">
            </div>

            <div class="form-group">
                <label for="description">Book Description</label>
                <textarea name="description" class="form-control" id="description" cols="10" rows="5">{{$book->description}}</textarea>
            </div>
            
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control" id="isbn" value=" {{$book->isbn}} ">
            </div>



            <div class="form-group">
                
                <label for="selected_authors">Book Authors</label>


                <!--    Existing Authors List:    -->
                @foreach ($book->authors as $author)
                     <li> {{ $author->name }} </li>
                @endforeach
                <br>


                <!--    Here 'multiple' attribute is used to select the multiple authors. 'selected_authors[]' is used to send the selected multiple data from 'Input Form' to 'Controller'. Otherwise, 'selected_authors' will send the last data only.    -->
                <select name="selected_authors[]" id="selected_authors" class="form-control" multiple>            
                    
                    @foreach($authors_list as $author)

                        <option value="{{ $author->id }}">{{ $author->name }}</option>

                    @endforeach
                
                </select>
        
            </div>

        
            <br>
            <button type="submit" class="btn btn-primary">Update</button>


        </form>

    </div>
    
</body>
</html>
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

        <h1>Edit Person</h1><br>

        <form action="/persons/{{$editable_person->id}}/edit" method='POST'>


            @csrf                     <!--   Cross-site request forgery. It is used for security purposes. To protect from third-party apps.    -->
        
          
     
            
            <!--             
            By default HTML support only GET requests and Form support only GET & POST requests.
            For other requests or methods like PUT, PATCH & DELETE we need to configure or modify them by using:  @method('<Request_Name>')
            -->

            @method('patch')                 <!--  Here, it is used for updates.  -->



            <div class="form-group">
                <label for="">Person Name</label>
                <input type="text" name="name" class="form-control" value= "{{ $editable_person->name }}">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value= "{{ $editable_person->email }}">
            </div>
            
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control" value= "{{ $editable_person->phone }}">
            </div>

            <div class="form-group">
                <label for="">Country Name</label>
                <select name="country_id" id="country_id" class="form-control">
                    <option value="{{ $editable_person->country->id }}">{{ $editable_person->country->name }}</option>           <!--          Here,  editable_person  is an object of the "Person" model. country also is an object of editable_person. country is defined in the 'Person' model              -->             
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name}}</option>               
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>


        </form>

    </div>
    
</body>
</html>
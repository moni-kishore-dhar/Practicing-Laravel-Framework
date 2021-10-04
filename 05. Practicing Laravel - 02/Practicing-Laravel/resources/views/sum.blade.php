<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum</title>
</head>
<body>

<h1>Summation:</h1>

<h3>{{$num1}} + {{$num2}}= {{$res}}</h3>


<br><br>
















<h1>Some Blade Enginee Features:</h1>





<?php
    $res=$res*10;                      //We can add raw php in Blade File 
?>


<b> After Multipling 10 with the result = {{$res}} </b>
<br>










@php
    $res= $res +2;                     //We also can add raw php like this in Blade File
@endphp


<b> After Adding 2 with the result = {{$res}} </b>


<br><br>









<b>

    @if($res%2==0)
        {{$res}} {{ " is a even number" }}
    @else
        {{$res}} {{ " is a odd number" }}
    @endif
    
</b>






<br><br>






@switch($k=5)
    @case(4)
        <b>It is 4</b>
        @break
    @case(5)
        <b>It is 5</b>
        @break
    @case(6)
        <b>It is 6</b>
        @break
    @default
        <b>Not found</b>
        @break
@endswitch
    






<br><br>





@for($i =1; $i <=5; $i++)
    <p style="background: #f6f6f6">{{$i}}</p>
@endfor







<br><br>


@{{ fdhfhh }}          {{--     For printing "{{ fdhfhh }}"      --}}





<br><br><br><br>





{{--


@php
    $data = ['Name' => "Kishor" , 'Roll' => "01" , 'Mobile' => "017000" , 'Address' => "Bangladesh"];
@endphp




@foreach($data as $key => $value)
    <p><strong>{{$key}}: </strong>{{$value}}</p>
@endforeach


--}}








@php
    $data = ['Name' => "Kishor" , 'Roll' => "01" , 'Mobile' => "017000" , 'Address' => "Bangladesh"];
@endphp



@forelse($data as $key => $value)
    <p><strong>{{ $loop -> index }} {{$key}}: </strong>{{$value}}</p>                {{--  $loop is a global variable. --}}
@empty
    <b>No Data has been found</b>        {{--   It will print for empty array   --}}
@endforelse


<br><br>


@forelse($data as $key => $value)
    <p><strong>{{ $loop -> iteration }} {{$key}}: </strong>{{$value}}</p>
@empty
    <b>No Data has been found</b>        {{--   It will print for empty array   --}}
@endforelse



<br><br>



@forelse($data as $key => $value)
    <p><strong>{{ $loop -> odd }} {{$key}}: </strong>{{$value}}</p>
@empty
    <b>No Data has been found</b>        {{--   It will print for empty array   --}}
@endforelse



<br><br>



@forelse($data as $key => $value)
    <p><strong>{{ $loop -> even }} {{$key}}: </strong>{{$value}}</p>
@empty
    <b>No Data has been found</b>        {{--   It will print for empty array   --}}
@endforelse




<br><br>












<br><br><br><br>




</body>
</html>
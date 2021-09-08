<?php

echo "<title>Array and Loop</title>";





//Array & Loop


/*
$A=[5,6,8,"ff",8.9];  //Dinamic array

for ($j=0; $j <4 ; $j++) { 
	echo $A[$j]."<br>";
}

echo "<br>";

$students=[];             //Array declearation
$students[0]="hridoy";
$students[1]="Susmoy";
$students[2]="kishor";
$students[3]="linkon";
$students[4]="Ripon";
$students[5]=18;

for ($i=0; $i <6 ; $i++) { 
	echo $students[$i]."<br>";
}
*/








//Associative Array and Foreach loop


/*

$B=["name" => "kishor", "roll" => "8" ,"age" => "25", "Number" => "0174627889"];
$C=["address" => "habiganj"];


echo $B["age"]."<br>";
echo $C["address"]."<br>";
echo "<br><br>";





// Foreach is used to print all values of the Associative Array.


foreach ($B as $key => $value) {
echo $key." => ".$value."<br>";
}

echo "<br><br>";
echo "<br><br>";


*/





/*


$students_info=[
		"name" => "hridoy", 
		"roll" => "1" ,
		"age" => "25",
		"Number" => "0174627889",
		"address"=> "habiganj",
		"class" => "10"
];


//2 ta variable use korle key and value both access hobe


$i=1;
foreach($students_info as $ke => $va)
{
	echo $i." ".$ke." => ".$va."<br>";
	$i++;
}

echo "<br><br>";


//1 ta variable use korle sudhu value access hobe.

foreach($students_info as $u)
{
	echo $u."<br>";
}


*/




//2D Array

$G=[
	[4,5,9,"h"],
	[6,5,0,9],
	["gg","gg",5,3]
];


for ($i=0; $i <=2 ; $i++) { 
	for ($j=0; $j <=3 ; $j++) { 
		echo $G[$i][$j]." ";
	}
	echo "<br>";
}












?>
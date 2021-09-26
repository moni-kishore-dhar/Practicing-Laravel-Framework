<?php
echo "<title>Static Variable & Function</title>";



//Without Static Variable & Function


/*
class Vehicle
{
	public $color="Green";
	public function get_color()
	{
		return $this->color;
	}
}


$Vehicle_1= new Vehicle();
$Vehicle_1->color="Yellow";
echo $Vehicle_1->get_color()."<br>";


$Vehicle_2= new Vehicle();
$Vehicle_2->color="Red";
echo $Vehicle_2->get_color()."<br>";


$Vehicle_3= new Vehicle();
echo $Vehicle_3->get_color()."<br>";


echo "<br>";

echo "Vehicle 1: ".$Vehicle_1->get_color()."<br>";

echo "Vehicle 2: ".$Vehicle_2->get_color()."<br>";

echo "Vehicle 3: ".$Vehicle_3->get_color()."<br>";


*/

















//With Static Variable & Function




/*

class Vahicle
{
	public $brand_name;    //It is an Instance Variable or Object Variable
	
	public static $color="Green";   //It is a Class Variable. it does not need any object for accessing from outside of class.

	public static function drive()
	{
		echo "Driving <br><br>";
	}
}



echo Vahicle::$color."<br>";
Vahicle::drive(); 


*/











class Vehicle
{
	public static $color="Green";
	public function __construct($clr)
	{
		self::$color=$clr;
	}

	public function get_color()
	{
		return self::$color;
	}
}



echo "Assigned Color: ".Vehicle::$color."<br><br><br>";




$Vehicle_1= new Vehicle("Yellow");
echo "Vehicle 1: ".$Vehicle_1->get_color()."<br>";

$Vehicle_2= new Vehicle("Red");
echo "Vehicle 2: ".$Vehicle_2->get_color()."<br>";

$Vehicle_3= new Vehicle("Blue");
echo "Vehicle 3: ".$Vehicle_3->get_color()."<br>";



echo "<br>";


echo "Vehicle 1: ".$Vehicle_1->get_color()."<br>";
echo "Vehicle 2: ".$Vehicle_2->get_color()."<br>";
echo "Vehicle 3: ".$Vehicle_3->get_color()."<br>";



Vehicle::$color="White";


echo "<br>";


echo "Vehicle 1: ".$Vehicle_1->get_color()."<br>";
echo "Vehicle 2: ".$Vehicle_2->get_color()."<br>";
echo "Vehicle 3: ".$Vehicle_3->get_color()."<br>";



Vehicle::$color="Orange";


echo "<br>";


echo "Vehicle 1: ".$Vehicle_1->get_color()."<br>";
echo "Vehicle 2: ".$Vehicle_2->get_color()."<br>";
echo "Vehicle 3: ".$Vehicle_3->get_color()."<br>";





echo "<br><br> Assigned Color: ".Vehicle::$color."<br>";





























?>
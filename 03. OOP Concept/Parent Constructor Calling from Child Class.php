<?php

echo "<title>Parent Constructor Calling from Child Class</title>";


class Vehicle
{
	public $brand_name;
	protected $color;

	public function __construct($name, $clr)
	{
		$this->brand_name=$name;
		$this->color=$clr;
		echo "Constructor of Vehicle Class <br>";
	}

	public function drive()
	{
		echo "Driving Function <br>";
	}
	
	public function get_color()
	{
		return $this->color;
	}
}




class Car extends Vehicle
{
	public $milage;

	public function __construct($name, $clr, $milage)
	{
		parent::__construct($name, $clr);

		$this->milage=$milage;
		echo "Constructor of Car Class <br>";
	}
}




$Car_1 = new Car("Toyta","Red",130);

$Car_1->drive();

echo "<br>";

echo $Car_1->brand_name."<br>";
echo $Car_1->get_color()."<br>"; 
echo $Car_1->milage."<br>";

echo "<br><br>";





$Vehicle_1 = new Vehicle("BMW","Black");

$Vehicle_1->drive();

echo "<br>";

echo $Vehicle_1->brand_name."<br>";
echo $Vehicle_1->get_color()."<br>";


?>


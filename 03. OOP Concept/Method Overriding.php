<?php
echo "<title>Method Overriding</title>";







class vehicle 
{
	public $brand_name;
	public $color;

	public function drive()
	{
		echo "Driving Vehicle Class<br>";
	}
}







class Car extends Vehicle
{
	//Method Overriding 


	public function drive()
	{
		echo "Driving Car Class<br>";
	}
}


$Vehicle= new Vehicle();
$Vehicle-> drive();



$Car= new Car();
$Car-> drive();
















?>
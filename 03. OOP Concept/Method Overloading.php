<?php
echo "<title>Method Overloading</title>";



echo "<b>PHP does not suppor Method Overloading. But we can write a function which behave like Overloading.</b>";


echo "<br><br><br><br>";








class Vehicle
{
	public $brand_name;
	public $color;


	public function drive($speed = null)   
	{
		if($speed == null)
		{
			echo "Driving at speed Null.<br><br>";
		}
		else
		{
			echo "Driving at speed ".$speed.".<br><br>";
		}
	}
}





$Vehicle_1 = new Vehicle();

$Vehicle_1-> drive();
$Vehicle_1-> drive(100);
$Vehicle_1-> drive(50);









?>
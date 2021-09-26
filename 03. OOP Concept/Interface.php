<?php
echo "<title>Interface</title>";



echo "<b>Interface only contain the signature of a function. It does not conain the body of a function. An interface also does not contain member variable in PHP</b>";


echo "<br><br><br><br>";




/*


interface Drivable
{
	public function drive();
}

class vehicle implements Drivable
{
	public $brand_name;
	public $color;

	public function drive()
	{
		echo "Driving<br>";
	}
}

$vehicle_1 = new vehicle();
$vehicle_1->drive();


*/










interface A
{
	public function A_Method();
}


interface B
{
	public function B_Method();
}


interface C extends A,B        //An interface can inherit multiple Interface 
{
	public function C_Method();
}




class vehicle_1 implements A,B   //A class can implement multiple Interface
{
	public $brand_name;
	public $color;

	public function A_Method()
	{
		echo "A method is Driving<br>";
	}

	public function B_Method()
	{
		echo "B method is Driving<br>";
	}
}

$vehicle_1 = new vehicle_1();
$vehicle_1->A_Method();
$vehicle_1->B_Method();





echo "<br><br><br>";




class vehicle_2 implements C
{
	public $brand_name;
	public $color;

	public function A_Method()
	{
		echo "A method is Driving<br>";
	}

	public function B_Method()
	{
		echo "B method is Driving<br>";
	}
	public function C_Method()
	{
		echo "C method is Driving<br>";
	}
}

$vehicle_2 = new vehicle_2();
$vehicle_2->A_Method();
$vehicle_2->B_Method();
$vehicle_2->C_Method();



?>
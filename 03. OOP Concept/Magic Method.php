<?php
echo "<title>Magic Method</title>";









class Vehicle
{
	public function drive()
	{
		echo "Drive function is called<br>";
	}


	public function __call($source, $parameter)
	{
		echo "Magic method is called. Source: ".$source."<br>";          //It will be print when wrong Function is called.

		var_dump($parameter);        //It will show parameter
		echo "<br><br>";


	}


	public static function __callStatic($source, $parameter)
	{
		echo "Static Magic method is called. Source: ".$source."<br>";          //It will be print when wrong Static Function is called.

		var_dump($parameter);    //It will show parameter
		echo "<br><br>";


	}
}






$Vehicle_1 = new Vehicle();




$Vehicle_1->drive();

echo "<br><br><br><br>";


$Vehicle_1->running(18.6,4,4);          //wrong function is calling
$Vehicle_1->horning('y',2);         //wrong function is calling





Vehicle::Racing(4,8,9);        //wrong static function is calling






?>
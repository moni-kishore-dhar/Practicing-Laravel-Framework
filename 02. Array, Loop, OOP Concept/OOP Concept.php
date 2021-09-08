<?php
echo "<title>OOP</title>";


/*

class vehicle
{
	public $brand_name = "toyta";
	public $color = "green";


	public function drive()
	{
		echo "Drive the car<br>";
	}
}


$vehicle_1 = new vehicle();

echo $vehicle_1->brand_name."<br>";
echo $vehicle_1->color."<br>";
$vehicle_1->drive();

echo "<br>";

$vehicle_2 = new vehicle();

$vehicle_2->brand_name="BMW";
$vehicle_2->color="Blue";


echo $vehicle_2->brand_name."<br>";
echo $vehicle_2->color."<br>";
$vehicle_2->drive()."<br>";


*/








class book
{
	protected $title;
	private $price;


	public function __construct()
	{
		$this->title="Default Title";
		$this->price="Default Price";
		echo "<br><br>Constructor has been Created for book class <br><br>";
	}

	
	

	public function set_value($new_title,$new_price)
	{
		
		if(strlen($new_title)>5)
		{
			return;
		}

		$this->title=$new_title;
		$this->price=$new_price;
	}



	public function get_title(){
		return $this->title;

	}
	public function get_price(){
		return $this->price;
		
	}

}





class noble extends book
{
	private $publication;

	

	public function __construct()
	{
		$this->publication="Default Publication";

		
		$this->title="Default Title for Noble";
		$this->price="Default Price for Noble";   //it will not work. cause price is private variable in book class.


		echo "<br><br>Constructor has been Created for noble class <br><br>";
	}

	
	public function set_publication($new_publication){
		$this->publication=$new_publication;
	}

	public function get_publication(){
		return $this->publication;
	}
}





$Book = new book();

//$Book->set_value("ABCDEFGHIJK","JJ");

$Book->set_value("MM G","NN T");



echo "Book Title: ".$Book->get_title()."<Br>";
echo "Book Price: ".$Book->get_price();


echo "<br><br><br><br>";







$Noble = new noble();

$Noble->set_publication("PRFS");
echo "Noble Publication: ".$Noble-> get_publication()."<br>";




//$Noble->set_value("ABC","HIJ");
echo "Noble Title: ".$Noble->get_title()."<Br>";
echo "Noble Price: ".$Noble->get_price();





















/*


There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class





*/























?>
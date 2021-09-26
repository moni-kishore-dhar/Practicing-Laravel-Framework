<?php
echo "<title>Abstract</title>";




echo "<b>Abstract class contains both incomplete(i.e. abstract) and complete members. Abstract class does contain a data member also in PHP</b>";


echo "<br><br><br><br>";







	abstract class Fruit {
		public abstract function info();     //It is an abstract function
		public abstract function print_taste($taste);     //It is an abstract function
		
		public function comment()
		{
			echo "<h1>Fruits are good For our Health</h1>";
		}
	}

	class Apple extends Fruit {
		public function info() {
			echo "<h1>It's an apple</h1>";
		}
		public function print_taste($taste) {
			echo "<h1>The apple tastes {$taste}</h1>";
		}
	}

	class Orange extends Fruit {
		public function info() {
			echo "<h1>It's an orange</h1>";
		}
		public function print_taste($taste, $price=10) {
			echo "<h1>The orange tastes {$taste} with price BDT {$price} per piece.</h1>";
		}
	}

	$apple = new Apple();
	$apple->info();
	$apple->comment();

	$orange = new Orange();
	$orange->info();
	$orange->comment();

	$apple->print_taste("sweet");
	$orange->print_taste("sweet");         //It will print price 10 as a default price
	$orange->print_taste("sweet", 100);    //It will print price 100


?>
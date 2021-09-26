<?php
echo "<title>Trait</title>";


Trait AlgebraTrait
{
	public function sum($a,$b)
	{
		return $a+$b;
	}
	public function sub($a,$b)
	{
		return $a+$b;
	}
	public function mul($a,$b)
	{
		return $a*$b;
	}
	public function div($a,$b)
	{
		return $a/$b;
	}
}




Trait GeomatryTrait
{
	public function area_of_circle($radius)
	{
		return 3.1416*($radius*$radius);
	}
	public function area_of_square($side)
	{
		return $side*$side;
	}
}




class Algebra_Calculator
{
	use AlgebraTrait;
}



class Geomatry_Calculator
{
	use GeomatryTrait;
}



class Calculator
{
	use AlgebraTrait,GeomatryTrait;
}


echo "<b>Using Algebra Calculator:</b><br><br>";

$Algebra_Calculator_1 = new Algebra_Calculator();

echo "5+6= ".$Algebra_Calculator_1->sum(5,6)."<br>";
echo "5*6= ".$Algebra_Calculator_1->mul(5,6)."<br>";
echo "15/6= ".$Algebra_Calculator_1->div(15,6)."<br>";




echo "<br><br><br>";




echo "<b>Using Geomatry Calculator:</b><br><br>";

$Geomatry_Calculator_1 = new Geomatry_Calculator();

echo "Area of a Circle (for Radius= 12) = ".$Geomatry_Calculator_1->area_of_circle(12)."<br>";
echo "Area of a Square (for Side= 12) = ".$Geomatry_Calculator_1->area_of_square(12)."<br>";





echo "<br><br><br>";





echo "<b>Using Calculator:</b><br><br>";

$Calculator_1 = new Calculator();

echo "8+7= ".$Calculator_1->sum(8,7)."<br>";
echo "3*4= ".$Calculator_1->mul(3,4)."<br>";
echo "18/4= ".$Calculator_1->div(18,4)."<br>";

echo "<br>";

echo "Area of a Circle (for Radius= 18) = ".$Calculator_1->area_of_circle(18)."<br>";
echo "Area of a Square (for Side= 18) = ".$Calculator_1->area_of_square(18)."<br>";





echo "<br><br><br>";


?>
<?php

class shape {

protected $length=4;
protected $width=5;
public function getArea(){

//return pow($this->length, 2);
return $this->length * $this->length;// bnktb el shakl el asasy hna w lma n3oz n3del feh byb2a fe classes tanya.s

}


}

class square extends shape{



}

class rectangle extends shape{

public function getArea(){

	return $this->length * $this->width;
}


}

//$shape->getArea();

echo"the area of square is " .(new square)->getArea();// bnndh 3ala el child method 
echo"<br>";
echo"the area of the rectangle is " . (new rectangle)->getArea();


?>
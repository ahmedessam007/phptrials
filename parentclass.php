<?php

class person{
  public $name;

  public $age;

  public $length;

  public $color;

   public function __construct($name){

   	$this->name= $name; // 3mal assign en el name hwa el variable elly hygelo mn el function.
   }
	
	public function setAge($age){ // 34an el age myb2ash bel -ve .

		if ($age < 18) {
			
			throw new Exception("this person is not older enough", 1);
			
		}

		$this ->age = $age;
	}

	public function tall($length)
	{
		$this->length=$length;
	}

	public function color($color){

		$this->color=$color;
	}

	public function getAge(){// get age msh bta5od pramaeters.

		return $this->age*356;
	}


}
$Ahmed= new person ("ahmed");// 5ad object mn class person w edalo assign llname .

	//$Ahmed->age = 30;// 3amal assign llage b 30.
	$Ahmed->length=180 ;
	$Ahmed->color="white";
	$Ahmed ->tall(180);// bncall el function tall
     $Ahmed->setAge(30);
	//var_dump($Ahmed);// 3arad el object .
	var_dump($Ahmed->getAge());

	// bndy ll function prameters lw e7na hn3mlaha calling b3d kda lkn lw msh m7taga n3mlaha calling msh bndeha el variable fel parameters.

?>
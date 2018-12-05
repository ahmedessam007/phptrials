<?php 

/*class newclass extends parentclass{

public  $info = "this is my info"; // 3rfna property esmaha info no3ha public.
}

$object = new newclass;// 5dna object mn el class.

var_dump($object-> name);*/

class task{

	//public $dis= " go to the store";// 3raf property esmaha dis
	public $dis;
	 public $completed = false;

	public function __construct($dis){

		//var_dump($dis);
		$this-> dis = $dis;// edena value ll"dis" = learn oop.
	}

	public function complete(){

       $this-> completed= true;// bn2ol enna bn assign el variable completed b true.
	}
}

$new = new task("learn oop ");// 3raf object mn el class
//$new2 = new task("hello world");
//var_dump($new-> completed);// 3mlaha calling.
$new-> complete();// 5d object mn el function.
var_dump($new-> completed);// by3rd elly gwa el function


?> 
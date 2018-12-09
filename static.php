<?php 
// el static variable da variable sabt 3ala mostawa el class w mmkn yt8yar lkn el constant da msh hyt8yar tool el script 
/*class math 
{
	public static  function add(...$numbers)// bn7ot el ... bdal elfunc_get_arguments.
	{
		return array_sum($numbers);

	}

	
}
echo math::add(1,2,3,4);// el tre2a elly bnndh beha 3ala function static*/

class person{

	public static $age=1;

	public function birthday()
	{
		static::$age++;
	}

}
$ahmed= new person;
$ahmed->birthday();
echo person::$age;  
?>
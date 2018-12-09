<?php 

class person{

	protected $name;

	public function __construct($name)
	{

		$this->name=$name;
	}


}

class business{

	protected $staff;

	public function __construct(staff $staff)// business needs staff;
	{
		$this->staff=$staff;

	}

	public function hire(person $person)// business hires person
	{

        $this->staff->add($person); // message of adding person to the staff by sending message through instance from class staff  

	}
}

class staff{

protected $members=[];// 3rfna array bel members elly fel staff

public function __construct($members[])//3mlna function el members 34an n7ot fehom el members elly fel staff.
{
	$this->members[]=$members;
}

public function add(person $person) // bn3ml function add elly ndhnaha fel hiring 
{
	$this->members[]=$person;// bnmla el array bel persons
}

}

$ahmed= new person("ahmed essam");// ndhna 3ala class person w ednalo esm.
$staff= new staff([$ahmed]);// 5dna object mn class staff w b3den b3d ma 3mlna function el members 34an n7ot feha el members ndhna 3ala el class bel array w 7tena feha el object mn class person .
$company= new business($staff);// ndhna 3ala class business mn object company.
$company->hire($ahmed); // ndhna 3ala function hire.

var_dump($staff);



?> 
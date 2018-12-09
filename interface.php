<?php 

/*interface animal { de class elly b7ot feha el functions elly 3yz a3mlaha implement f ay class tany 

	public function communicate();// de el 7aga elly lazm ttnfz fkol el classes elly hst5dm feha class el animal 
}

class dog implements animal{

	public function communicate(){

		return 'bark';
	}
}

class cat implements animal{

	public function communicate(){

		return 'meao';
	}
}*/

interface logger{}

class logintofile{

	public function execute($message){


		var_dump("log the message into the file");
	}
}

class logintodatabase{

	public function execute($message){

		var_dump("log the message into the databas");
	}
}

?>
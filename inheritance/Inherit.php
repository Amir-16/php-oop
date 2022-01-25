<?php

class University{

	public $uniName="Berlin University";
	function uni(){
		echo "Welcome to $this->uniName".PHP_EOL;
	}

}


class Professor extends University{

	public $ProfessorName ="Smith";
			function prof(){
		echo "Hlw from $this->ProfessorName Professor of Computer Science Department".PHP_EOL;
	}

 		
	}

class Search extends Professor{

		function getData(){
			echo "testing the data";
		}
	}

$prof1 =new Professor();
$prof1->uni();
$prof1->prof();

echo $prof1->uniName.PHP_EOL;

$data = new Search();
$data->getData();

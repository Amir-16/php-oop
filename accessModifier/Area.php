<?php

class Area{


	private $name;

//getter method return/pass the value
//get value //set Value
	function getName(){

		return $this->name;
	}

	function setName($name) :string{
		$this->name =$name;
		return $name;
	}

	function block(){
		echo "hlw from K Block".PHP_EOL;
	}


}

$local =New Area();
$local->setName("Khulshi");

$local->block();


//find bug
// echo "$local->name is a Reknown Area";

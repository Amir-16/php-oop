<?php


// private method can access by another method
class House{

	private $road;
	private $owner;

	//getter & setter

	//get method return/get the value & set method set the actual value
	//have to return the value
	function getroad(){
		return $this->road;
	}

	function setRoad($road) :string{
		$this->road=$road;
		return $road;
	}
	function getOwner(){
		return $this->owner;
	}

	function setOwner($owner) :string{
		$this->owner=$owner;
		return $owner;
	}

	function area(){
		echo "welcome to NoyaBazar";
	}

	function moholla(){
		echo " hlw from chowdhuryPara";
	}
}

	
$house = new House();

//accessing the private modifier
$house->setRoad("twelve");
$house->setOwner("Ferdush");
$house->area();
$house->moholla();
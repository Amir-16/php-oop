<?php

// exaple of class & objects
class Laptop{

	public $name;
	public $color;
	public $ram;

	function buyOne(){
		echo "Wanna  buy a MacBook" .PHP_EOL;
	}
}

$obj=new Laptop();
$obj->name="Hp";
$obj->color="Black";
$obj->ram ="12 gb";
$obj->buyOne() ;


echo "$obj->name is $obj->color & Ram is $obj->ram" .PHP_EOL;
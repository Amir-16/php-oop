<?php


class Math{

	public $a ;
	public $b ;


	function sum (){
		$c =$this->a +$this->b;

		return $c;
		//echo $c;
	}
}

$math = new Math();

$math->a =30;
$math ->b=50;
$result=$math->sum();

echo "$result";
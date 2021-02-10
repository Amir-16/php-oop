<?php

class Electron{

	public $brand;
	public $category;

	function mthd1(){
		echo "There are many brand of this brands".PHP_EOL;
	}

	function mthd2(){
		echo "There are category like fredge, tv,mobile".PHP_EOL;
	}


}

	$elc = new Electron();

	$elc->brand="Samsung";
	$elc->category ="Ac";

	$elc->mthd1();
	$elc->mthd2();

	echo "$elc->brand is acquired by Apple".PHP_EOL;
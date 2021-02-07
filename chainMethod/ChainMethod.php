<?php 

class ChainMethod{

//Chain method is fun
	//can easily track  the chain of method
//call this method first to change the value
	function mthd1(){
		echo "hello from mthd1".PHP_EOL;
		$this->name="ChainMethod";
		return $this;
	}

	//call this method to display the property line
	function mthd2(){
		echo "content from mthd2 ($this->name)";
	}
}


$hwd =new ChainMethod();
$hwd->mthd1()->mthd2();


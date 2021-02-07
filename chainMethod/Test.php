<?php


class Test{

	public $content;

	function __construct($content){
		echo "Test from constrcut".PHP_EOL;
		$this->content=$content;
	}

	function __destruct(){
	echo "Test from destruct".PHP_EOL;
	}

	function printData(){
		echo $this->content .PHP_EOL;
		return $this;
	}
}

$test = new Test("for test purpose");

$content=$test->printData()->content;

echo $content;
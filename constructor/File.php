<?php

class File{


//Constructor is fun

	function __construct($filename){

		if(!file_exists($filename)){
			echo "file not found";
		}
		else{

			echo file_get_contents($filename);
		}
	}

	function __destruct(){
		echo "close";
	}
}

 $check =new File("hlw.txt");





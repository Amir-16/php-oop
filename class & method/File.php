<?php


class File{

	function display($fileName) {
		if(!file_exists($fileName))
		{
			echo "file doesnot exist";
			

		}
		else{

			echo file_get_contents($fileName);
		}

		 
	}

}

$file = new File();

$file ->display("Test2.txt");

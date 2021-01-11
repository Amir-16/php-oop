<?php

// files with mehod parameter
class Files{

	function display($filename) : bool{

		$result = true;
		try{
			echo "Read the content of the file:$filename" .PHP_EOL;
			$content=file_get_contents($filename);
			echo "display content of file" .PHP_EOL;
			echo $content;

		} 
		catch(Exception $e){
			$result=False;

		}

		return $result;

	}

}

$file =new Files();

//$file->display("Test.txt");

$file1= new Files();
$file1->display("test1.txt");

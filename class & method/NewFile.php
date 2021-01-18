<?php

class NewFile{


	function display($fileName) :bool{

			$result =true;

			try{

			//echo "display the content of $fileName".PHP_EOL;
			$content =file_get_contents($fileName);
			echo $content;

			}
			catch(Exception $e){

				echo " $fileName No such file exist".PHP_EOL;
				$result =false;

			}

			return $result;

	}

}

$file =new NewFile();
$file->display("TesT.txt");
<?php


// final keyword mainly use to restrict protected some area ,code ,system control

final class Window{

	private $security ="password";

	function restrict(){
		echo "you cannot acces this class";
	}
}

class Driver extends Window{

	function protect(){
		echo "acces permit?";
	}
}
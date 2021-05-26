<?php

require "Shop.php";
require "Project.php";
class Mycls {

// have to use trait name
	use Complex,Project;
}

$obj = new Mycls();

$obj->find();
 
 echo "<br/>";
$obj->display();
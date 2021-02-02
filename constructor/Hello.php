<?php

class Hello{

function __construct(){
  //initialize the value
  echo "hello from contruct".
  PHP_EOL;
}

function __destruct(){
  //close the connection or empty the space
  echo "bye from destruct".
  PHP_EOL;
}


}

$obj = new Hello();


 ?>

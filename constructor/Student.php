<?php

class Student{

public $name;
public $class;


function __construct($name="", $class =""){

    $this->name = $name;
    $this->class = $class;
}

    function properties(){

      echo "$this->name is studying at $this->class grade."
      .PHP_EOL;
    }

}

$student =new Student();
$student->name= "Inzi,Turzo";
$student->class=12;
$student->properties();

//best practice
$student = new Student("Inzi,Turzo","12");
$student->properties();


 ?>

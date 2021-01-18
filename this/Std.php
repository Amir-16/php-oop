<?php

class Std{

    public $name;
    public $class;

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name =$name;
    }

    function getClass(){
        return $this->class;
    }

    function setClass($class){
        $this->class= $class;
    }

    function printValue(){
        
        echo "$this->name Study in Germany in $this->class grade";
    
    }

}


$student = new Std();

$student->setName("Miraz");
$student->setClass("11th");

$student->printValue();

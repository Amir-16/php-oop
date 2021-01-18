<?php

class Student {

    public $name;
    public $class;

    function getName() :string{

        return $this->name;
    }

    function setName($name){
        $this->name =$name;

    }

    function getClass() :string{

        return $this->class;
    }

    function setClass($class){
        $this->class =$class;

    }

    function printProperty(){
        echo "$this->name is studying in $this->class class";
    }

}

$Student1 = new Student();
$Student2 = new Student();

$Student1->setName("Arik");
$Student1->setClass("7th");

$Student1->printProperty();


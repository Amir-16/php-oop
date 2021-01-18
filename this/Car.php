<?php

class Car{

    public $name ;

    //getter methods
    function getName() :string {

        return $this->name;
    }

    //setter methods
    function setName($name){
        $this->name =$name;
    }

}

$car = new Car();
$car->setname("Marcedez-Benz");
echo $car->getName() .PHP_EOL;

$car1 = new Car();
$car1->setName("BMW");
echo $car1->getName() .PHP_EOL;
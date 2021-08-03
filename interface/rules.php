<?php


interface  Vehicle {

    public function wheeler();

    }


class Car implements Vehicle{

    public function wheeler()
    {
        echo"four wheeler ".PHP_EOL;
    }
}

class Bike implements Vehicle{

    public function wheeler()
    {
        echo "Two wheeler".PHP_EOL;
    }
}

class Taxi implements Vehicle{

    public function wheeler()
    {
        echo "Three Wheeler".PHP_EOL;
    }
}


$car =new Car();

$bike =new Bike();

$taxi = new Taxi();

$vehicles = array($car ,$bike, $taxi);


foreach ($vehicles as $vehicle) {
    
    $vehicle->wheeler().PHP_EOL;
}
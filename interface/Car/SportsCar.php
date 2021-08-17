<?php

require_once "Car.php";

require_once "CarReg.php";

//so have to use all methods of two interface
class SportsCar implements Car,CarRegistration{

    public function BreakingSystem()
    {
        echo "breaking is good enough" .PHP_EOL;
    }

    public function fuel()
    {
        echo "mileage  15".PHP_EOL;
    }

    public function price()
    {
        echo "Price is 2 crores".PHP_EOL;
    }
    //setter
    public function chesisNo($no)
    {
        $this->no =$no;
    }

    //getter
    public function registrationNo():string
    {
        return $this->no;
    }



}
<?php

// php doesnt suppot overload ..

// overloading is same method different parameter  only suport by magic method __call()


class Salary{


    public $hour =8;
    public $price =1000;

//defalut value
    function getSalary(){
        return $this->hour * $this->price;
    }
//if take input
    function getSalary($hour,$price){
        return $this->hour * $this->price;
    }
}

//cannot possible
$employee1 =new Salary();

echo $employee1->getSalary();
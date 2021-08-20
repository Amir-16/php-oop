<?php

class Product{

    static public $total;
    // static public $items;

    static function sell($unit ,$price) {

            self::$total = $unit * $price;
           
    }
}

Product::sell(18 , 1000);

 echo Product::$total.PHP_EOL;

 

<?php


class Product{

    static public $total;
    // static public $items;

    static function sell($unit ,$price) :int{

            $total =$unit * $price;
            return $total;
    }

}

 Product::$total =Product::sell(18 , 1000);

 echo Product::$total.PHP_EOL;

 echo Product::sell(300, 100);


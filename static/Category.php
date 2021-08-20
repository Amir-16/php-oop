<?php

class Category{

    static public $result ;

        static function productNo( $pros,  $cons) :int{

            $result =$pros + $cons;
            return $result;
        }

}

Category::$result =Category::productNo(10 , 20);

echo Category::$result .PHP_EOL;

echo Category::productNo(100,300);
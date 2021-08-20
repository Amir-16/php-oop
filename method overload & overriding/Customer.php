<?php


class Customer {

    function avgSell(){
        echo "average sell is 1000k in hm".PHP_EOL;
    }
}


class Dealer extends Customer{

    function avgSell()
    {
        echo "sell is minimum 20000k".PHP_EOL;
    }

}

$customer1 =new Customer();

$customer2 =new Dealer();

$customer1->avgSell();
$customer2->avgSell();
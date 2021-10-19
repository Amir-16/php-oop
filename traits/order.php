<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello traits!';
    }
}

$obj = new TheWorldIsNotEnough();
$obj->sayHello();
?>
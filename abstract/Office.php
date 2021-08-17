<?php

abstract class office{

        abstract function files();

        public function documents(){

            echo "shareable documents are available".PHP_EOL;
        }

}

class Contract extends office{

    function files(){
        echo "this methods is abstract".PHP_EOL;
    }

}
//cannot create object of abstract
//$obj =new Office();

$obj =new Contract();

$obj->files();
$obj->documents();
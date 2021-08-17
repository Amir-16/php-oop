<?php

require_once "Phone.php";

class Ios implements Phone{


    public function makecall( $number)
    {
        
        echo "Make call to the client  $number".PHP_EOL;
    
    }

    public function sendmessage($number, $message)
    {
        echo "Send $message to the $number".PHP_EOL;
    }

}
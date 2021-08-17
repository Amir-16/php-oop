<?php

interface Phone{

    public function makecall( $number);
    public function sendmessage($number,$message);
}   
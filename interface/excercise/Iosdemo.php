<?php

require_once "Phone.php";
require_once "Ios.php";

$phone =new Ios();

$phone->makecall("hlw");

$phone->sendmessage("979234","ongoing Offer");
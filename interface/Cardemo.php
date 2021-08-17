<?php

require_once "Car.php";
require_once "SportsCar.php";


$unit =new SportsCar();
$unit->BreakingSystem();
$unit->fuel();
$unit->price();
$unit->chesisNo("Ab16022");
echo "Car Reg No :". $unit->registrationNo();


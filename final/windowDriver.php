<?php


final  class windowsDriver{

    private $property ="diskInformation";

    function redZonearea(){

        return false;
    }

}

class Driver extends windowsDriver{

        function restrict(){

            echo"can not access the Class property";
        }

}

$data = new Driver();

$data->restrict();


<?php

class Project{
        
    function __construct()
    {
        echo "schedule for production".PHP_EOL;
    }

}

class  subProject extends Project{


}


$obj= new Project();

$obj1 =new subProject();
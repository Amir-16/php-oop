<?php

class Employee{

        static public $total;
    
        static function  salary($day ,$workhour){
                
            //don't need to return anything
                self::$total = $day * $workhour;
        }

}


//dont need to call var.. direct call function
// Employee::$total =Employee::salary(25 ,1500);

Employee::salary(25,2000);

echo Employee::$total.PHP_EOL;

// echo Employee::salary(22,2000);
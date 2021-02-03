<?php

class Employee{

    public $id;
    public $name;
    public $workingHoursPerDay=12;
    public $totalLeave;
    public $workingDays;
    public $hourlyRate="25";
    public $salary;
        function __construct($id,$name,$totalLeave){

        	$this->id =$id;
        	$this->name =$name;
        	$this->totalLeave =$totalLeave;
        }

        function getSalary($totalDays){

        		$this->workingDays =$totalDays - $this->totalLeave;
        		$salary =$this->workingDays * $this->workingDays * $this->workingHoursPerDay;
        		return $salary;
        }

   
    }

    $emp = new Employee(011,"Amir",2);
    $salary= $emp->getSalary(30);
    //echo " $this->name";
    echo " $emp->name Salary is $salary $";


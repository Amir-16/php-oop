<?php


//class function $this
class Developers{

	public $id;
	public $name;
	public $hoursSalary=25;
	public $workingHoursPerDay=12;
	public $totalLeave;
	public $workingDay;
  // $this keyword cam access class property

	function  getSalary($totalDays) :int {

		$this->workingDay= $totalDays - $this->totalLeave;
		$salary =$this->workingDay *$this->hoursSalary *$this->workingHoursPerDay;

		return $salary;
	}
}

$engineer = new Developers();
$engineer->id= 1;
$engineer->name = "Amir";
$engineer->totalLeave =2;

$salary = $engineer->getSalary(30);

echo "$engineer->name has worked  $engineer->workingDay & take $engineer->totalLeave Leave" .PHP_EOL;
echo " $engineer->name Salary is   $salary $".PHP_EOL;
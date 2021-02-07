<?php 

class Bank{

public $accno;
public $name;
public $balance=0;


	function __construct($accno , $name,$balance){
			$this->accno=$accno;
			$this->name =$name;
			$this->balance=$balance;
	}
///Bank Account check 
function depositAmount($amt){
	$this->balance=$this->balance + $amt;

	return $this;
}

function deductAmount($amt){

	if($this->balance <=0){
		echo "No balance in the account";
		return $this ;
	}

	if($this->balance <=$amt){
		echo "DeductAmount  is greater than balance ";
		return $this;
	}

	$this->balance=$this->balance -$amt;
	return $this;
	

}

function checkBalance(){
	echo "Your balance is $this->balance".PHP_EOL;
	return $this;

		}

}

$user =new Bank(01,"Amir",25000);

$user->depositAmount(10000)->checkBalance();
$user->deductAmount(5000)->checkBalance();
$user->depositAmount(25000)->checkBalance();
$user->deductAmount(600000)->checkBalance();


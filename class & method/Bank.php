<?php 

class Bank{

public $accno;
public $name;
public $balance=0;

///Bank Account check 
function depositAmount($amt){
	$this->balance=$this->balance + $amt;

}

function deductAmount($amt){

	if($this->balance <=0){
		echo "No Blance in the account";
		return ;
	}
	if($this->balance <=$amt){
		echo "DeductAmount  is greater than balance ";
		return;
	}

	$this->balance=$this->balance -$amt;
	

}

function checkBalance(){
	echo "Your balance is $this->balance".PHP_EOL;

}

}

$user =new Bank();
$user->accno =110;
$user->name = "Amir";
$user->balance =2000;

$user->depositAmount(10000);
$user->checkBalance();
$user->deductAmount(5000);
$user->checkBalance();
$user->depositAmount(25000);
$user->checkBalance();
$user->deductAmount(40000);
$user->checkBalance();


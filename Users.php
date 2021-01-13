<?php


///organizing code & clean code
class Users{

	function fetchUser($id) :bool{
		
		$result =false;
		echo "Query the database $id".PHP_EOL;
		$result =true;
		echo "Display the user" .PHP_EOL;
		return $result;


	}

	function deleteUser($id){
		echo "delete the user $id".PHP_EOL;

	}
}

$user =new Users;

$user->fetchUser(001);

$user->deleteUser(004);
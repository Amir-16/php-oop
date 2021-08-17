<?php

abstract class Database {

    public $connection;
    public $connctionActive =false;
   abstract function setconnection($dbname);
   
    abstract function getconnection();

    function checkConnection(){

    }
    
}

class DBconnection extends Database{

    function setconnection($dbname){    

        $this->connctionActive =false;
        $this->connection = "Conncetion to handler to database";

    }
    function getconnection()
    {
        if($this->connctionActive ==true){
            return $this->connection;
        }else
        {
            echo "cannot connected";
        }
    }
}

$store =new DBconnection();

$store->setconnection("db1");

echo $store->getconnection();

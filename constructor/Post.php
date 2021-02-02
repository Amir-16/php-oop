<?php

class Post{


    //
    // public $dbConnection;

    // function __destruct(){
    //         mysqli_close($dbConnection);
    // }

    function __construct(){
        echo "construct are calling you".PHP_EOL;
    }
     
    function __destruct(){
        echo "destruct are destroy connection";
    }
}

$post =new Post();




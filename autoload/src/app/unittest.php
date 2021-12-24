<?php


use src\App\Project;
use PHPUnit;

class Test extends Project{



    function sampleTest(){

        $result =2 +2;
        $this->assertEquals(4,$result);
    } 


    function testResult(){

        $result =1;
        $this->assertEquals(true, $result);
        

    }
}


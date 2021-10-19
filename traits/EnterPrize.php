<?php

trait EnterPrise{


    public function suboffice(){
        echo "Under The Trait";
    }
}

class  Company{

    use EnterPrise;

    public function suboffice()
    {
        echo "Remake trait class method";

    }
}


$company =New Company();

$company->suboffice();
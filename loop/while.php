<?php



//print 1 to 10
$array=range(1,10);
$i=0;

$countArray =count($array);
while($i<$countArray ){
    echo $array[$i];
    $i++;
    echo PHP_EOL;
}

?>
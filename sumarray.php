<?php
	$numbers=array(1,2,5,10,255,3);
    $value=0;
    $counter = 0;

    foreach($numbers as $number){
        $value=$value+$number;
        $counter++;
    };
    echo "Sum= $value <br>";
    
    echo "Average= ". $value/$counter. " <br>";
?>
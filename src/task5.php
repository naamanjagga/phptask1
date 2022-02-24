<?php 
 $array1 = array(78, 60, 62, 68, 71, 68, 73, 85, 
                 66, 64, 76, 63, 75, 76, 73, 68, 
                 62, 73, 72, 65, 74, 62, 62, 65, 
                 64, 68, 73, 75, 79, 73);

    $sum = array_sum($array1);
    $count = count($array1);
    echo  "average is - ".$sum/$count.".";
    sort($array1);
    echo '<br>';
    echo "List of five lowest element ";
    for($i = 0; $i <5 ; $i++){
        
        print($array1[$i]); 
    }
    echo '<br>';
    echo "List of five highest element ";
    for($i = $count-5; $i <= $count ; $i++){
        
        print($array1[$i]); 
    }
 
 ?>
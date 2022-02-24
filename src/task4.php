<?php 
 $array1 = array(1 ,2 ,3 ,4 ,5);
 echo "before insert";
 print_r($array1);
 array_splice($array1 ,3 , 0,'$');
 echo '<br>';
 echo "after insert";
 print_r($array1);
?>
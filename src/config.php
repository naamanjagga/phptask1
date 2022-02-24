<?php
 session_start();
?>
<?php
 $array1 = array(1 ,2 ,3 ,4 ,5 ,6 ,7 ,8);
 $_SESSION["array"] = $array1;
 echo "Array before updation";
 echo '<br>';
 print_r($_SESSION['array']);
 echo '<br>';
 $array2 =  $_SESSION["array2"];
 echo '<br>';
 echo "Array before updation";
 echo '<br>';
 print_r($array2);
?>
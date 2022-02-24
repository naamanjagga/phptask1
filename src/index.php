<?php
 session_start();
?>
<?php
$_SESSION["array2"] = array();
foreach($_SESSION["array"] as $i ) {
       if($i==2){
           $i = 5;
       }
       array_push($_SESSION["array2"],$i);
       echo '<br>';
}


?>
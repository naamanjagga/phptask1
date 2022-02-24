<?php 
 $array1 = array("a" => array( "a" => 77,"b" => 87),"b" => array("b" =>23,"a" => 45));
 $array2 = array("a" => "w3resource","b" => "com");
 echo "arrays before merging";
 echo '<br>';
 print_r($array1);
 echo '<br>';
 print_r($array2);
 echo '<br>';
 echo "arrays after merging";
 echo '<br>';
 $array = array_merge_recursive( $array2 ,$array1 );
 print_r($array);
?>
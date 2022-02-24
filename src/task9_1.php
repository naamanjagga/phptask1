<?php include "task9.php";?>
<?php 
   echo '<table>';
   foreach($ceu as $key => $values){
    
       echo '<tr><td style="border: 2px solid black">'.$key.'</td><td style="border: 2px solid black">'.$values.'</td></tr>';
      
   }
   echo '</table>';
?>
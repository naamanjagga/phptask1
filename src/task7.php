<?php 
  $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
  //$color1 = array_change_key_case($Color, 'UPPER_CASE');
  echo '<br>';
  echo "Values are in Upper Case";
  echo '<br>';
  $Color = array_flip($Color);
  $Color = array_change_key_case($Color, CASE_UPPER);
  $Color = array_flip($Color);
  print_r($Color);
  echo '<br>';
  echo "Values are in Upper Case";
  echo '<br>';
  $Color = array_flip($Color);
  $Color = array_change_key_case($Color, CASE_LOWER);
  $Color = array_flip($Color);
  print_r($Color);
 ?>
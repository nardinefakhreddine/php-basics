<?php
$food = array(" Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
$p = array (
    $food[0]=>array( 'balade', 'mazere3' ),
    $food[1]=>array('Fresh', 'Taanayel'),
   $food[3]=> array( 'Tanoureen', 'Reem')
  );

echo "Hey Sir, Please I need 1 pack of ".$p[$food[0]][0]." ". $food[0]." and 3 ".$p[$food[3]][1]." ".$food[3];


?>
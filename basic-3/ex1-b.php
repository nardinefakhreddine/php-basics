<?php
function sum($num){
    $sum=0;
  for($i=0;$i<=(strlen($num)-1);$i++){
    $sum=$sum+$num[$i];
  }  
  return $sum;
}
 echo sum("1234");

?>

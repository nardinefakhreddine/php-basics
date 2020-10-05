<?php
function search_c($text,$word){
    $array=explode(" ", $text);
     $len=count($array);
     $count=0;
     $i=0;
    
     while($i<$len){
        
if(strcmp($array[$i],$word) == 0){
    $count=$count+1;
   
}
$i++;

     }

return $count;
}
$text="she is mirna she  she she is teacher";
$word="she";

 $count= search_c("she is mirna she  she she is teacher","she");
 echo $count;
echo " <br>we have ".$count." ".$word." at the text";
?>
<?php
function isPowerOfTwo($n) 
{ 
    if($n%2==0){
        return $n." is  a power of 2";
    } else{
        return $n." isn't power of 2";
    }
} 
echo isPowerOfTwo(32);

?>
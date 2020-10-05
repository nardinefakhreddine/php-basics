<?php
function check_palindrom($str){
if($str===strrev($str)){
return 1;
}
else{
    return 0;
}


}
echo check_palindrom("hello");
echo"<br>";
echo check_palindrom("bab");
?>
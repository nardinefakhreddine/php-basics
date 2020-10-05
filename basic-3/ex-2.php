
<?php  
function fact($num){

$factorial = 1; 
$x=$num; 
while($x>=1){

$factorial = $factorial * $x;
$x--;

}
echo "Factorial of $num is $factorial";
}
fact(4);
?> 
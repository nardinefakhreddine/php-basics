<?php 
$course_name="php";

$enrolled_students=3;

$price=1.1;

$on_discount=true;
if($on_discount){
    $on_discount="YES";
}else{
    $on_discount="NO";
}

echo "Course title: $course_name, the language of no bugs <br>";

echo "Enrolled Students: $enrolled_students  <br>";

echo "Course price: ".$price  ."$ USD <br>";
 echo "Course on discount:$on_discount";


?>
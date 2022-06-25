<?php
 echo "Defult syntax";


 $amount = 200;

 echo("<br>The amount is :  $amount <br>");

 function student_info($student_name , $class, $roll_no){
    echo "the name of student : $student_name <br>";
    echo "His Class is : $class and Roll no: $roll_no <br>";

 }

 student_info("Mohammed Terfa" , "V", 12);


 function student_infoo(
    $StudentName,
    $classNum,
    $Roll
 ){
    echo "the name of student : $StudentName <br>";
    echo "His Class is : $classNum and Roll no: $Roll <br>";
 }

 student_infoo(
    "Terfa Mohamed", "R" ,14
 );

?>
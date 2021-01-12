<?php
class Student{
   function __construct(){
      echo "Constructor Called";
   }
   function __destruct(){
      echo "<br>Object Destroyed";
   }
}
$stu=new Student;
?>
<?php
class Student{
   public static $name;
   public static function disp($nm){
      Self::$name=$nm;
      echo "Hello " . Self::$name;
   }
}
Student::disp("PHP");

?>
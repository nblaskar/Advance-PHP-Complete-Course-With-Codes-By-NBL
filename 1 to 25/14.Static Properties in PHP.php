<?php
//Example-1
// class Student{
//    public static $name;
//    public function disp($nm){
//       Self::$name=$nm;
//       echo "My Name is " . Self::$name;
//    }
// }
// $stu=new Student;
// $stu->disp("NBLaskar");


//Example-2
class Father{
   public static $a=10;
   public function disp(){
      echo Self::$a;
   }
}
$obj=new Father;
$obj->disp();

?>
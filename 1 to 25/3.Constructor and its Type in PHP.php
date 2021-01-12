<?php
//Default Constructor
// class Student{
//    function __construct(){
//       echo "Constructor Called";
//    }
// }
// $stu=new Student;

// Parameterized Constructor
//--With Single Parameter
// class Student{
//    public $roll;
//    function __construct($enroll){
//       echo "Constructor Called <br>";
//       $this->roll=$enroll;
//       echo $this->roll;
//    }
// }
// $stu=new Student(15);

//--With Multiple Parameter
class Student{
   public $name;
   function __construct($fname,$lname){
      echo "Constructor Called <br>";
      $this->name=$fname . $lname;
      echo $this->name;
   }
}
$stu=new Student("Nur"," Laskar");


?>
<?php
//Example-1
// abstract class Father{
//    function disp(){
//       echo "Normal Method";
//    }
// }
// $obj=new Father;
// $obj->disp();



//Example-2
// abstract class Father{
//    function disp(){
//       echo "Normal Method<br>";
//    }
//    abstract function absmethod();
// }
// class Son extends Father{
//    public function absmethod(){
//       echo "Abstract Method Defined <br>";
//    }
// }
// $obj=new Son;
// $obj->absmethod();



//Example-2
abstract class Father{
   function disp(){
      echo "Normal Method<br>";
   }
   abstract function absmethod();
}
abstract class Son extends Father{
}
class GrandSon extends Son{
   function absmethod(){}
}
$obj=new GrandSon;
$obj->absmethod();
?>
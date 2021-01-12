<?php
final class Father{
   function shows(){
      echo "parent<br>";
   }
}
// class Son extends Father{
//    function disp(){
//       echo "child <br>";
//    }
// }
// $objs=new Son;
// $objs->disp();

$objf=new Father;
$objf->shows();


?>
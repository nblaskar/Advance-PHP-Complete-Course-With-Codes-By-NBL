<?php
class Father{
   function disp(){
      echo "Super Class <br>";
   }
}
class Son extends Father{
   public function disp(){
      echo "Son Class <br>";
   }
}
$objs=new Son;
$objs->disp();

$objf=new Father;
$objf->disp();


?>
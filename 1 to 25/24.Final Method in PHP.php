<?php
class Father{
   final function shows(){
      echo "shows-I am Final <br>";
   }
   function disp(){
      echo "disp-I am not Final <br>";
   }
}
class Son extends Father{
   public function disp(){
      echo "disp-I am overrided <br>";
   }
}
$objf=new Father;
$objf->shows();
$objf->disp();


$objs=new Son;
$objs->disp();




?>
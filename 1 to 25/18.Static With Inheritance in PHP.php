<?php
class Father{
   public static $a=20;
}
class Son extends Father{
   function disp(){
      echo Self::$a;
      echo Father::$a;
   }
}
$obj=new Son;
$obj->disp();

?>
<?php
class Father{
   const mark=101;
   function disp(){
      echo self::mark;
   }
}
// $obj=new Father;
// $obj->disp();

echo Father::mark;

// $obj=new Father;
// Father::mark=102;
// echo Father::mark;

?>
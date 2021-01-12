<?php
class Father{
   public $sci=101;
}
interface Mother{
   const math=102;
   public function disp();
}
interface Brother{
   const total=250;
}
class Son extends Father implements Mother, Brother{
   public function disp(){
      echo $this->sci;
      echo Mother::math;
      echo Brother::total;
   }
}
$obj=new Son;
$obj->disp();

?>
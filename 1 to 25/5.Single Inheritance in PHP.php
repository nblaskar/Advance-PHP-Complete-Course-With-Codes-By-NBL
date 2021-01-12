<?php
//Single Inheritance
class Father{
   public $a;
   public $b;
   function getValue($x,$y){
      $this->a=$x;
      $this->b=$y;
   }
}
class Son extends Father{
   function display(){
      echo "Value of A: $this->a <br>";
      echo "Value of B: $this->b <br>";
   }
}
$obj=new Son;
$obj->getValue(10,20);
$obj->display();
?>
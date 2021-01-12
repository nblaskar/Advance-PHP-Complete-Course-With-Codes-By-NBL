<?php
//Multi-Level Inheritance
class Father{
   public $a;
   public $b;
   function getValue($x,$y){
      $this->a=$x;
      $this->b=$y;
   }
}
class Son extends Father{
   public $c=30;
   public $sum;
   function add(){
      $this->sum=$this->a + $this->b + $this->c; 
      return $this->sum;
   }
}
class GrandSon extends Son{
   function display(){
      echo "Value of A: $this->a <br>";
      echo "Value of B: $this->b <br>";
      echo "Value of C: $this->c <br>";
      echo "Value of Sum:". $this->add() . "<br>";
   }
}
$obj=new GrandSon;
$obj->getValue(10,20);
$obj->display();
?>
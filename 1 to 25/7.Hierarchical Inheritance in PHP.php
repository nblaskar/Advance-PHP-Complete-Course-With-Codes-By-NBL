<?php
//Heirarchical Inheritance
class Father{
   public $a;
   public $b;
   function getValue($x,$y){
      $this->a=$x;
      $this->b=$y;
   }
}
class Son extends Father{
   function add(){
      return $this->a + $this->b;
   }
   function display(){
      echo "Value of A: $this->a <br>";
      echo "Value of B: $this->b <br>";
      echo "Addition:". $this->add() . "<br>";
   }
}
class Daughter extends Father{
   function multi(){
      return $this->a * $this->b;
   }
   function display(){
      echo "Value of A: $this->a <br>";
      echo "Value of B: $this->b <br>";
      echo "Multiplication:". $this->multi() . "<br>";
   }

}
$obj=new Son;
$obj->getValue(10,20);
$obj->display();
$obj=new Daughter;
$obj->getValue(40,50);
$obj->display();


  

?>
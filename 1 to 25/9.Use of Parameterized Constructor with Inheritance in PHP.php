<?php
class Father{
   public $a;
   function __construct($x){
      echo "<br>Parent Constructor Called ";
      $this->a=$x;
      echo $this->a;
   }
}
  
class Son extends Father{
   public $b;
   function __construct($x,$y){
     parent::__construct($x);
      echo "<br>Child Constructor Called ";
      $this->b=$y;
      echo $this->b;
   }
}
$obj=new Son(10,20);  

?>
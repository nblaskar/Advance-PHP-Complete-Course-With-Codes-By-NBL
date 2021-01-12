<?php
class Father{
   function __construct(){
      echo "<br>Parent Constructor Called";
   }
}
  
class Son extends Father{
   function __construct(){
     // parent::__construct();
      echo "<br>Child Constructor Called";
   }
}
$obj=new Son();  

?>
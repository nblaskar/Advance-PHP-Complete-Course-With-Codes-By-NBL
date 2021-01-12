<?php
//Example-1
// class Father{
//    public $a; // $a //var $a
//    public function disp(){
//       echo "Parent Function $this->a ";
//    }
// }
// $obj=new Father;
// $obj->a=10;
// $obj->disp();


//Example-2
class Father{
   public $a; // $a //var $a
   public function dispParent(){
      echo "Parent Function $this->a ";
   }
}
class Son extends Father{
   public function dispChild($x){
      $this->a=$x;
      echo "Child Value is  $this->a <br> ";
      $this->dispParent();
   }
}
$obj=new Son;
$obj->dispChild(10);


?>
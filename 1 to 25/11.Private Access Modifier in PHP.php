<?php
//Example-1
// class Father{
//    private $a;
//    public function disp(){
//       $this->a=30;
//       echo "Parent Function $this->a ";
//    }
// }
// // $obj=new Father;
// // $obj->disp();

// $obj=new Father;
// $obj->a=10;
// $obj->disp();


//Example-2
class Father{
   // private $a=30;
   public $a=30;
}
class Son extends Father{
   public function dispChild(){
      echo  $this->a ;
   }
}
$obj=new Son;
$obj->dispChild();


?>
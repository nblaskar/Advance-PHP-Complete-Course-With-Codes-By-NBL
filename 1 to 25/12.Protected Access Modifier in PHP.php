<?php
//Example-1
// class Father{
//    protected $a;
//    public function disp(){
//       $this->a=10;
//       echo "Parent Function $this->a ";
//    }
// }

// // $obj=new Father;
// // $obj->a=30;
// // $obj->disp();

// $obj=new Father;
// $obj->disp();



//Example-2
class Father{
   protected $a=30;
}
class Son extends Father{
   protected $b=20;
}
class GrandSon extends Son{
   public function dispGrandChild(){
      echo  $this->a . "<br>" . $this->b ;
   }
}
$obj=new GrandSon;
$obj->dispGrandChild();


?>
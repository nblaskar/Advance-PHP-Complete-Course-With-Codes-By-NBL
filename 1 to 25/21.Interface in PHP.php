<?php
//Example-1
// interface Father
// {
//    const a=101;
//    function disp();
// }
// interface Son extends Father{
//    const b=102;
//    function getValue();
// }

//Example-2
// interface Father
// {
//    const a=101;
//    function disp();
// }
// interface Mother
// {
//    const m=102;
//    function showValue();
// }
// interface Son extends Father, Mother{
//    const s=103;
//    function getValue();
// }

//Example-3
// interface Father
// {
//    const mark=101;
//    public function disp();
//    public function getVal();
// }
// class Son implements Father{
//    public function disp()
//    {
//       echo Father::mark;
//    }
//    public function getVal(){}
// }
// $obj=new Son;
// $obj->disp();



//Example-4
interface Father
{
   const sci=101;
   public function disp();
   public function getVal();
}
interface Mother
{
   const math=102;
}
class Son implements Father, Mother{
   public function disp()
   {
      echo Father::sci;
      echo Mother::math;
   }
   public function getVal(){}
}
$obj=new Son;
$obj->disp();




?>
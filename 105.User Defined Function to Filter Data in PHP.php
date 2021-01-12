<?php
//Other Filter FILTER_CALLBACK
// //Predefined Function with FILTER_CALLBACK
// $name="nblaskar";
// echo filter_var($name,FILTER_CALLBACK,array('options'=>'strtoupper'));


//User defined Function with FILTER_CALLBACK
function myfun($info){
    return str_replace("nbl","nblaskar",$info);
}
$message="i am nbl. owner of nbl solution";
echo filter_var($message,FILTER_CALLBACK,array('options'=>'myfun'));




?>
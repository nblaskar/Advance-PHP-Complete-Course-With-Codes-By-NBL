<?php
$a=8;
try{
    if($a>=10){
        echo $a;
    } else{
        throw new Exception("Enter Value Grater than 10");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    echo "Finally Block";
}
?>
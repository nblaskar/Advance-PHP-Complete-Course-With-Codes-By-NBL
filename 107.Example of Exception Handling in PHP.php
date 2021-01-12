<?php
if(isset($_REQUEST['submit'])){
    $a=$_REQUEST['a'];
    $b=$_REQUEST['b'];
    try{
        if($b<=0){
            throw new Exception("Value of B is Invalid");
        }else{
            $result=$a/$b;
            echo $result;
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
<form action="" method="POST">
A: <input type="text" name="a"> <span>/</span>
B: <input type="text" name="b">
<input type="submit" value="Submit" name="submit">
</form>
    
</body>
</html>
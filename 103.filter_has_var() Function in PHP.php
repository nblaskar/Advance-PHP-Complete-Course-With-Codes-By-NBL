<?php
if(isset($_REQUEST['submit'])){
    if(filter_has_var(INPUT_POST, 'name')){
        echo "Name Found";
    }else{
        echo "Name Not Found";
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
Name:<input type="text" name="name" id="name">
<input type="submit" value="Submit" name="submit">
</form>    
</body>
</html>
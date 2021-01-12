<?php
//Cookie Setting
    $cookie_name='user_email';
    if(isset($_REQUEST['set'])){
        $cookie_value=$_REQUEST['email'];
        $cookie_expire=time()+60*60*24*10;
        setCookie($cookie_name,$cookie_value,$cookie_expire);
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
<h1>Use Of Cookies</h1>
<form action="" name="myform" method="POST">
Email: <input type="email" name="email"> <br> <br>
<input type="submit" value="Save" name="set">
</form>
<hr>
<?php
//Cookie Reading
    if(isset($_COOKIE[$cookie_name])){
        echo "Cookie Name is ".$cookie_name. " And Value is ". $_COOKIE[$cookie_name]."<br>";
    } else{
        echo "Cookie not Set";
    }
?>

    
</body>
</html>
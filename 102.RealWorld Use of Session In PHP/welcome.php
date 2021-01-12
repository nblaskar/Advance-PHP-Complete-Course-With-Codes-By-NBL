<?php
//Start Session
session_start();


if(isset($_SESSION['uname'])){
    //Access Session Data
    echo "<h1>Welcome</h1>";
    echo $_SESSION['uname']."<br>";
    echo $_SESSION['pass']."<br>";


}else{
    echo "<script>location.href='login.php'</script>";
}


//Session Unset and Destroy
if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo "<script>location.href='login.php'</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>
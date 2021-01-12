<?php
    //Start Session
    session_start();

    //Set Session Variables
    $age=25;
    $_SESSION['username']='nbl';
    $_SESSION['password']=123;
    $_SESSION['age']=$age;


    //Access Session Variables
    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";
    echo $_SESSION['age'] . "<br>";


    //Check Session Variable Set or Not
    if(isset($_SESSION['username'])){
        echo "Session Variable set <br>";
    } else{
        echo "Session Variable Not set <br>";
    }

?>
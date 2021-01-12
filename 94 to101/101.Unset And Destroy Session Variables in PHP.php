<?php
//Run-1
    //Start Session
    session_start();

//Run-2
    //Set Session Variables
    // $_SESSION['username']='nbl';
    // $_SESSION['password']=123;

//Run-3
    //Access Session Variables
    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";


//Run-4
   //Unset Single Session Variable
//    unset($_SESSION['username']);

//Run-5
   //Unset All Session Variable
//    session_unset();

//Run-6
   //Destroy the Session 
   session_destroy();

?>
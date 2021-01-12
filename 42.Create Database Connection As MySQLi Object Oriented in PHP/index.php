<?php

//Process 1
   //   // Create Connection
   //   $conn= new mysqli("localhost","root","","nbldb");
   //   // Check Connection
   //   if($conn->connect_error){
   //      die("Connection Failed");
   //   }
   //   echo "Connected Successfully <hr>";




//Process-2
   //Connection Variables
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="new_db";
     // Create Connection
     $conn= new mysqli($db_host, $db_user, $db_password, $db_name);
     // Check Connection
     if($conn->connect_error){
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";



?>
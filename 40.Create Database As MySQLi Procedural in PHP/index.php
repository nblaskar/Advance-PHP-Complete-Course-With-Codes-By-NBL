<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
     // Create Connection
     //When you Create database do not specify database name here
     $conn=mysqli_connect($db_host, $db_root,$db_password);
     // Check Connection
     if(!$conn){
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
     $sql="CREATE DATABASE new_db";
           if(mysqli_query($conn,$sql)){
              echo "Database Created Successfully";
           } else{
              echo "Unable to Create";
           }
  
       


?>
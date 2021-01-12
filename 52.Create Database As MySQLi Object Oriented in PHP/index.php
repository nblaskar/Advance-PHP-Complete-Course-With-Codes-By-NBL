<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
     // Create Connection
     //When you Create database do not specify database name here
     $conn=new mysqli($db_host, $db_root,$db_password);
     // Check Connection
     if($conn->connect_error){
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
     $sql="CREATE DATABASE new_db";
      if($conn->query($sql)===TRUE){
         echo "Database Created Successfully";
      } else{
          echo "Unable to Create";
      }
      $conn->close();
  
       


?>
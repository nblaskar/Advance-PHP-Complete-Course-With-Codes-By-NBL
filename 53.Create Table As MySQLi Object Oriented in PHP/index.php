<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="new_db";
     // Create Connection
     $conn=new mysqli($db_host, $db_root,$db_password,$db_name);
     // Check Connection
     if($conn->connect_error){
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";

     $sql="CREATE TABLE emp(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255),
        roll INT,
        address TEXT
     )";
           if($conn->query($sql)===TRUE){
              echo "Table Created Successfully";
           } else{
              echo "Unable to Create";
           }
      $conn->close(); 
       


?>
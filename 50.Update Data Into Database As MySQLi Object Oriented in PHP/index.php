<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn=new mysqli($db_host, $db_root,$db_password, $db_name);
     // Check Connection
     if($conn->connect_error){
        // die("Connection Failed");
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
//Updating Process
   $sql="UPDATE student SET name='Firdaus', roll='110', address='Dubai' WHERE id=4 ";
      if($conn->query($sql)===TRUE){
         echo "Update Successful";
      }
      else{
         echo "Unable to Update";
      }
      $conn->close();

?>

<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn=mysqli_connect($db_host, $db_root,$db_password, $db_name);
     // Check Connection
     if(!$conn){
        // die("Connection Failed");
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
//Updating Process
   $sql="UPDATE student SET name='Rani', roll='110', address='Dubai' WHERE id=2 ";
      if(mysqli_query($conn,$sql)){
         echo "Update Successful";
      }
      else{
         echo "Unable to Update";
      }

?>

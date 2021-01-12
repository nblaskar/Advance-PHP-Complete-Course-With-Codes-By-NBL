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
     echo "Connection Successfull <hr>";

//Data Inserting
$sql="INSERT INTO Student (name, roll, address) VALUES('Rani','103', 'Banglore')";
if(mysqli_query($conn,$sql)){
   echo "Inserted Successfully";
} else{
   echo "Unable to insert Successfully";
}
  
?>
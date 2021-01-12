<?php
//Connection Variables
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="nbldb";
 // Create Connection
 $conn= new mysqli($db_host, $db_user, $db_password, $db_name);
 // Check Connection
 if($conn->connect_error){
    die("Connection Failed");
 }
 echo "Connected Successfully <hr>";

//Data Inserting
$sql="INSERT INTO Student (name, roll, address) VALUES('Rani','103', 'Banglore')";
if($conn->query($sql)===TRUE){
   echo "Inserted Successfully";
} else{
   echo "Unable to insert";
}
//Connection Close
$conn->close();
  
?>
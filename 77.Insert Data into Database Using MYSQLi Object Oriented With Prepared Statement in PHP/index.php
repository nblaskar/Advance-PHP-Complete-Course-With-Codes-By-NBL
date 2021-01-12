<?php
//Variable Defining for Connection Creation
$db_host="localhost";
$db_root="root";
$db_password="";
$db_name="nbldb";
 // Create Connection
 $conn=new mysqli($db_host, $db_root,$db_password, $db_name);
 // Check Connection
 if($conn->connect_error){
    die("Connection Failed". mysqli_connect_error());
 }
 echo "Connected Successfully <hr><br>";
//Insert Data

//INSERT SQL Statement
$sql="INSERT INTO student (name,roll,address) VALUES (?, ?, ?)";

//Prepare Statement
$result=$conn->prepare($sql);

if($result){
   //Bind Variables to Prepare Statement as Parameter
   $result->bind_param('sis',$name, $roll, $address);

   //Variables and values
   $name="Firdaus";
   $roll=105;
   $address="Guwahati";
   
   //Execute Prepared Statement
   $result->execute();   

   //Variables and values
   $name="Nur";
   $roll=106;
   $address="Dubai";

   //Execute Prepared Statement
   $result->execute();

   //Total Rows Affected
   echo $result->affected_rows."Row Inserted<br>";

}else{
   echo "Unable to insert";
}

//Close Prepared Statement
$result->close();

//Close Connection
$conn->close(); 

  
?>
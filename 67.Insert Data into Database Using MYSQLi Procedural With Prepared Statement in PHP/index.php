<?php
//Variable Defining for Connection Creation
$db_host="localhost";
$db_root="root";
$db_password="";
$db_name="nbldb";
 // Create Connection
 $conn=mysqli_connect($db_host, $db_root,$db_password, $db_name);
 // Check Connection
 if(!$conn){
    die("Connection Failed". mysqli_connect_error());
 }
 echo "Connected Successfully <hr><br>";
//Insert Data

//INSERT SQL Statement
$sql="INSERT INTO student (name,roll,address) VALUES (?, ?, ?)";

//Prepare Statement
$result=mysqli_prepare($conn,$sql);

if($result){
   //Bind Variables to Prepare Statement as Parameter
   mysqli_stmt_bind_param($result, 'sis',$name, $roll, $address);

   //Variables and values
   $name="Firdaus";
   $roll="105";
   $address="Guwahati";

   
   //Execute Prepared Statement
   mysqli_stmt_execute($result);

   //Variables and values
   $name="Nur";
   $roll="106";
   $address="Dubai";

   //Execute Prepared Statement
   mysqli_stmt_execute($result);

   //Total Rows Affected
   echo mysqli_stmt_affected_rows($result)."Row Inserted<br>";

}else{
   echo "Unable to insert";
}

//Close Prepared Statement
mysqli_stmt_close($result);

//Close Connection
mysqli_close($conn); 

  
?>
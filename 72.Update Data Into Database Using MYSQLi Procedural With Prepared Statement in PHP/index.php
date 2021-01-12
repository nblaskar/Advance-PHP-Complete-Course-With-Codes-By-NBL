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
//Data Updation

//UPDATE SQL Statement
$sql="UPDATE student SET name=?, roll=?, address=? WHERE id=?";

//Prepare Statement
$result=mysqli_prepare($conn,$sql);

if($result){

   //Bind Variables to Prepare Statement as Parameter
   mysqli_stmt_bind_param($result, 'sisi',$name, $roll, $address, $id); //this order should be maintained

   //Variables and values
   $name="Rahul";
   $roll=101;
   $address="Delhi";

   //Targeted ID
   $id=1;
   
   //Execute Prepared Statement
   mysqli_stmt_execute($result);

   //Total Rows Affected
   echo mysqli_stmt_affected_rows($result)."Row Updated<br>";

}else{
   echo "Unable to Update";
}

//Close Prepared Statement
mysqli_stmt_close($result);

//Close Connection
mysqli_close($conn); 

  
?>
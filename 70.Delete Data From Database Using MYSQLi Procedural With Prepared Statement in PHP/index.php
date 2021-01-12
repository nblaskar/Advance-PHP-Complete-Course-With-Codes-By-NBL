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
//Data Deletion

//DELETE SQL Statement
$sql="DELETE FROM student WHERE id=?";

//Prepare Statement
$result=mysqli_prepare($conn,$sql);

if($result){

   //Bind Variables to Prepare Statement as Parameter
   mysqli_stmt_bind_param($result, 'i',$id);

   //Variables and values
   $id=10;

   
   //Execute Prepared Statement
   mysqli_stmt_execute($result);

   //Total Rows Affected
   echo mysqli_stmt_affected_rows($result)."Row Deleted<br>";

}else{
   echo "Unable to Delete";
}

//Close Prepared Statement
mysqli_stmt_close($result);

//Close Connection
mysqli_close($conn); 

  
?>
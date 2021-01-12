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
    die("Connection Failed");
 }
 echo "Connected Successfully <hr><br>";
//Data Deletion

//DELETE SQL Statement
$sql="DELETE FROM student WHERE id=?";

//Prepare Statement
$result=$conn->prepare($sql);

if($result){

   //Bind Variables to Prepare Statement as Parameter
   $result->bind_param('i',$id);

   //Variables and values
   $id=18;

   
   //Execute Prepared Statement
   $result->execute();

   //Total Rows Affected
   echo $result->affected_rows."Row Deleted<br>";

}else{
   echo "Unable to Delete";
}

//Close Prepared Statement
$result->close();

//Close Connection
$conn->close(); 

?>
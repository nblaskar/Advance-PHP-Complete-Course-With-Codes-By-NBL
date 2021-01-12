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
//Data Updation

//UPDATE SQL Statement
$sql="UPDATE student SET name=?, roll=?, address=? WHERE id=?";

//Prepare Statement
$result=$conn->prepare($sql);

if($result){

   //Bind Variables to Prepare Statement as Parameter
   $result->bind_param('sisi',$name, $roll, $address, $id); //this order should be maintained

   //Variables and values
   $name="Rahul";
   $roll=101;
   $address="Canada";

   //Targeted ID
   $id=1;
   
   //Execute Prepared Statement
   $result->execute();

   //Total Rows Affected
   echo $result->affected_rows."Row Updated<br>";

}else{
   echo "Unable to Update";
}

//Close Prepared Statement
$result->close();

//Close Connection
$conn->close(); 

?>
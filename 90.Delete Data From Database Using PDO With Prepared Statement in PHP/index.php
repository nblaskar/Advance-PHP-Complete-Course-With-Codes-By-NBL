<?php
// -------Start Connection Creation------------
//Create Variable For Connection
$dsn="mysql:host=localhost;dbname=nbldb;";
$db_user="root";
$db_password="";
//Create Connection with Excxeption Handling
try{
   // Create Connection
   $conn= new PDO($dsn, $db_user, $db_password);
   //Set Error Mode
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected <hr><br>";
}
catch(PDOException $e){
   echo "Connection Failed".$e->getMessage();
}
// -------End Connection Creation------------


// -------Start Data Deletion Process------------

//---Using Named Placeholder

try{
   //DELETE SQL Statement
   $sql="DELETE FROM student WHERE id=:id";
   //Prepare Statement
   $result=$conn->prepare($sql);

   // ---(a)With Binding---
   
   // //Bind parameter to Prepared Statement
   // $result->bindParam(':id',$id,PDO::PARAM_INT);

   // // Variables and values
   // $id=28;

   // //Execute Prepared Statement
   // $result->execute();

   //----(b)Without Binding
   // Variables and values
   $id=28;

   // Execute Prepared Statement
   $result->execute(array(':id'=>$id));



   
   // //Number of row Deleted
   echo $result->rowCount()."Row Deleted";
}
catch(PDOException $e){
   // Error Message
   echo $e->getMessage();
}
 
//Close Prepared Statement
unset($result);

//Close Connection
$conn=null;



     
?>
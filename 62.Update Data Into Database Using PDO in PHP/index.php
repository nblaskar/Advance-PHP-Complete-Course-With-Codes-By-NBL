<?php
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

//Data Update
$sql="UPDATE student SET name='Sameer',roll='120',address='Guwahati' WHERE id=4";
$affected_row=$conn->exec($sql);
echo $affected_row . "Row Updated <br>";
}
catch(PDOException $e){
   echo "Connection Failed".$e->getMessage();
}
$conn=null;

  
?>
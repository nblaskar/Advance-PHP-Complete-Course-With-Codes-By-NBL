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

//Data Inserting
$sql="INSERT INTO Student (name, roll, address) VALUES('Firdaus','103', 'Banglore')";
$affected_row=$conn->exec($sql);
echo $affected_row . "Row Inserted <br>";


}
catch(PDOException $e){
   echo "Connection Failed".$e->getMessage();
}

  
?>
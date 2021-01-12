<?php
// //1)Standard Way of Connection Creation
// // Create Connection
// $conn= new PDO("mysql:host=localhost; dbname=nbldb;","root","");
// //Checking Connection
// if($conn){
//    echo "Connected";
// }


// //2)Advance and Best Way of Connection Creation
// //Variable Assignment 
// $dsn="mysql:host=localhost;dbname=nbldb;";
// $db_user="root";
// $db_password="";
// // Create Connection
// $conn= new PDO($dsn, $db_user, $db_password);
// //Checking Connection
// if($conn){
//    echo "Connected";
// }


//3)Connection Creation With Error/Exception Handling
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


     
?>
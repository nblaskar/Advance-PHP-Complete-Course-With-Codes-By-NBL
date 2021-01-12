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
}
catch(PDOException $e){
   echo "Connection Failed".$e->getMessage();
}
//Retriving Data
$sql="SELECT * FROM student";
$result=$conn->query($sql);
//Process-1
if($result->rowCount()>0){
   while($rows=$result->fetch(PDO::FETCH_ASSOC)){
      echo "ID: ".$rows['id'] .
       " Name: ".$rows['name'] ." Roll: ".$rows['roll'] ." Address : ".$rows['address'] ."<br>";
   }
}else{
   echo "No Records Found";
}
//Process-2
// foreach($result as $rows){
//    echo "ID: ".$rows['id'] .
//        " Name: ".$rows['name'] ." Roll: ".$rows['roll'] ." Address : ".$rows['address'] ."<br>";
// }

//Process-3
// foreach($result->fetchAll(PDO::FETCH_ASSOC) as $rows){
//    echo "ID: ".$rows['id'] .
//        " Name: ".$rows['name'] ." Roll: ".$rows['roll'] ." Address : ".$rows['address'] ."<br>";
// }


     
?>
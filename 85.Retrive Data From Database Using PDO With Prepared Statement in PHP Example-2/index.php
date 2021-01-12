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


// -------Start Data Retrieving------------
//Retrive Particular Data From Table By ID
// // Process-1
// try{
//    //SELECT SQL Statement
//    $sql="SELECT * FROM student WHERE id=?";// or id=:id

//    //Prepare Statement
//    $result=$conn->prepare($sql);

//    //Bind Param
//    $id=15; 
//    // $result->bindParam(1,$id);//':id'
//    // OR
//    // $result->bindValue(1,$id);
//    //OR
//    $result->bindValue(1,15);
  

//    //Execute Prepared Statement
//    $result->execute();

//    //Display Data
//    if($result->rowCount()>0){
//       //Fetch data
//       while($rows=$result->fetch(PDO::FETCH_ASSOC)){
//          echo "ID: ".$rows['id'] .
//           " Name: ".$rows['name'] ." Roll: ".$rows['roll'] ." Address : ".$rows['address'] ."<br>";
//       }
//    }else{
//       echo "No Records Found";
//    }

// }
// catch(PDOException $e){
//    // Error Message
//    echo $e->getMessage();
// }
 
// //Close Prepared Statement
// unset($result);


// Process-2
try{
   //SELECT SQL Statement
   $sql="SELECT * FROM student WHERE id=:id && name=:name";

   //Prepare Statement
   $result=$conn->prepare($sql);
  

   //Execute Prepared Statement
   $result->execute([':id'=>15,':name'=>'Firdaus']);

   //Display Data
   if($result->rowCount()>0){
      //Fetch data
      while($rows=$result->fetch(PDO::FETCH_ASSOC)){
         echo "ID: ".$rows['id'] .
          " Name: ".$rows['name'] ." Roll: ".$rows['roll'] ." Address : ".$rows['address'] ."<br>";
      }
   }else{
      echo "No Records Found";
   }

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
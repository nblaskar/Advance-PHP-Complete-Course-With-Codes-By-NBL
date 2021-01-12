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
//Retrive All data From Table
// Process-1
// try{
//    //SELECT SQL Statement
//    $sql="SELECT * FROM student";

//    //Prepare Statement
//    $result=$conn->prepare($sql);

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




//Process-2

try{
   //SELECT SQL Statement
   $sql="SELECT * FROM student";

   //Prepare Statement
   $result=$conn->prepare($sql);

   //Execute Prepared Statement
   $result->execute();

   //Bind By Column Number
   // $result->bindColumn(1,$id);
   // $result->bindColumn(2,$name);
   // $result->bindColumn(3,$roll);
   // $result->bindColumn(4,$address);

   //Bind By Column Name
   $result->bindColumn('id',$id);
   $result->bindColumn('name',$name);
   $result->bindColumn('roll',$roll);
   $result->bindColumn('address',$address);


   //Fetch to Display data
   while($result->fetch(PDO::FETCH_ASSOC)){
      echo "ID: ".$id ." Name: ".$name." Roll: ".$roll ." Address : ".$address ."<br>";
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
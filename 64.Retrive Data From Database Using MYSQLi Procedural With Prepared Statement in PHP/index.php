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
//Data Retraieving Process
// Process-1
// ---Retrive All Data

// //Select The Datas
// $sql="SELECT * FROM student";

// //Prepare Statement
// $result=mysqli_prepare($conn,$sql);

// //Bind Result Setin Variables
// mysqli_stmt_bind_result($result,$id,$name,$roll,$address); 

// //Execute Prepared Statement
// mysqli_stmt_execute($result);

// //Fetch Single Row Data
// // mysqli_stmt_fetch($result);
// // echo " ID: ".$id." Name: ".$name." Roll: ".$roll." Address ".$address."<br>";


// //Fetch All Table Data
// while(mysqli_stmt_fetch($result)){
//    echo " ID: ".$id." Name: ".$name." Roll: ".$roll." Address ".$address."<br>";
// }
// //Close Prepared Statement
// mysqli_stmt_close($result);

// //Close Connection
// mysqli_close($conn);


  
// Process-1
// ---Retrive Particular Data By ID

//Select The Datas
$sql="SELECT * FROM student WHERE id=?";

//Prepare Statement
$result=mysqli_prepare($conn,$sql);

//Bind Param
mysqli_stmt_bind_param($result,'i',$id);
$id=4;

//Bind Result Setin Variables
mysqli_stmt_bind_result($result,$id,$name,$roll,$address); 

//Execute Prepared Statement
mysqli_stmt_execute($result);

//Fetch All Table Data
while(mysqli_stmt_fetch($result)){
   echo " ID: ".$id." Name: ".$name." Roll: ".$roll." Address ".$address."<br>";
}

//Close Prepared Statement
mysqli_stmt_close($result);

//Close Connection
mysqli_close($conn);
  
?>
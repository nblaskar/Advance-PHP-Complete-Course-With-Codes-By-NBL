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
//Find Number of Rows

//Select The Datas
$sql="SELECT * FROM student";

//Prepare Statement
$result=mysqli_prepare($conn,$sql);

//Execute Prepared Statement
mysqli_stmt_execute($result);

//Store Result
mysqli_stmt_store_result($result);

//Track Number of Rows
$total_row=mysqli_stmt_num_rows($result);

//Print output
echo $total_row;

//Free Up the $result
mysqli_stmt_free_result($result);

//Close Prepared Statement
mysqli_stmt_close($result);

//Close Connection
mysqli_close($conn);


  

  
?>
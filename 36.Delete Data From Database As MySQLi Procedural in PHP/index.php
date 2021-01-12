<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn=mysqli_connect($db_host, $db_root,$db_password, $db_name);
     // Check Connection
     if(!$conn){
        // die("Connection Failed");
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
     //Deletion Process
     $sql="DELETE FROM Student   Where id=5";
     if(mysqli_query($conn,$sql)){
        echo "Deleted Successful";
     }else{
        echo "Unable to Delete";
     }

?>
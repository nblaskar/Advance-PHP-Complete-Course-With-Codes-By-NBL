<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn=new mysqli($db_host, $db_root,$db_password, $db_name);
     // Check Connection
     if($conn->connect_error){
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
     //Deletion Process
     $sql="DELETE FROM Student   Where id=6";
     if($conn->query($sql)===TRUE){
        echo "Deleted Successful";
     }else{
        echo "Unable to Delete";
     }
     $conn->close();
?>
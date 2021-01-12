<?php
    // // Create Connection
    // $conn=mysqli_connect("localhost","roott","","nbldb");
    // // Check Connection
    // if($conn){
    //     echo "Connected successfully";
    // }


    // ---->Standard and Advance Process
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn=mysqli_connect($db_host, $db_root,$db_password, $db_name);
     // Check Connection
     if(!$conn){
        // die("Connection Failed");
        die("Connection Failed" . mysqli_connect_error());
     }
?>
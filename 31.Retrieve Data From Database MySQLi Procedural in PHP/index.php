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

//Data Retraieving
     $sql="SELECT * FROM Student";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0){
        while($rows=mysqli_fetch_assoc($result)){
           echo "ID:".$rows["id"].
           "  Name:".$rows["name"].
           "  Roll:".$rows["roll"].
           "  Address:".$rows["address"]."<br>";
        }
     } else{
        echo "No Data Found!";
     }
     mysqli_close($conn);
?>
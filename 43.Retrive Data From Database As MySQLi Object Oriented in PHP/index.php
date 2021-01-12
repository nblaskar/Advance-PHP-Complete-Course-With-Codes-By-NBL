<?php
   //Connection Variables
    $db_host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn= new mysqli($db_host, $db_user, $db_password, $db_name);
     // Check Connection
     if($conn->connect_error){
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
      //Data Retraieving
      $sql="SELECT * FROM Student";
      $result=$conn->query($sql);
      if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
            echo "ID:".$rows["id"].
            "  Name:".$rows["name"].
            "  Roll:".$rows["roll"].
            "  Address:".$rows["address"]."<br>";
         }
      } else{
         echo "Data Not Found!";
      }


?>
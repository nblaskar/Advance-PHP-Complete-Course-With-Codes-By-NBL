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


      //Find Number of Rows

      //SELECT SQL Statement
      $sql="SELECT * FROM Student";

      //Prepare Statement
      $result=$conn->prepare($sql);

      //bind result Set in variables
      $result->bind_result($id, $name, $roll, $address);

      //Execute Prepared Statement
      $result->execute();

      //Store Result
      $result->store_result();
      
      //Track Number of Rows
      $total_rows=$result->num_rows;

      //Print o/p
      echo $total_rows;

      //Free Up Store Result
      $result->free_result();

      //Close Prepared Statement
      $result->close();
      
      //Close Connection
      $conn->close();


?>
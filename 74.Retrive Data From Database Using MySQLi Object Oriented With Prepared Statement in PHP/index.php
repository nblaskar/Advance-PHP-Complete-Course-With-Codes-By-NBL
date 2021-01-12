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


      //Process-1
      //---->Retrive All Data

      // //SELECT All Data
      // $sql="SELECT * FROM Student";

      // //Prepare Statement
      // $result=$conn->prepare($sql);

      // //bind result Set in variables
      // $result->bind_result($id, $name, $roll, $address);

      // //Execute Prepared Statement
      // $result->execute();

      // //Store Result
      // $result->store_result();
      
      // //Track Number of Rows
      // $total_rows=$result->num_rows;
      
      // if($total_rows> 0){
      //    //Fetch data
      //    while($result->fetch()){
      //       echo "ID:".$id.
      //       "  Name:".$name.
      //       "  Roll:".$roll.
      //       "  Address:". $address."<br>";
      //    }
      // } else{
      //    echo "Data Not Found!";
      // }

      // //Close Prepared Statement
      // $result->close();


      //Process-2
      //---->Retrive Particular Data By ID

      //SELECT SQL Statement
      $sql="SELECT * FROM Student WHERE id=?";

      //Prepare Statement
      $result=$conn->prepare($sql);

      //Bind Parameter
      $result->bind_param('i',$id);
      $id=7;

      //bind result Set in variables
      $result->bind_result($id, $name, $roll, $address);

      //Execute Prepared Statement
      $result->execute();

      //Store Result
      $result->store_result();
      
      //Track Number of Rows
      $total_rows=$result->num_rows;
      
      if($total_rows> 0){
         //Fetch data
         while($result->fetch()){
            echo "ID:".$id.
            "  Name:".$name.
            "  Roll:".$roll.
            "  Address:". $address."<br>";
         }
      } else{
         echo "Data Not Found!";
      }

      //Close Prepared Statement
      $result->close();







      //Close Connection
      $conn->close();


?>
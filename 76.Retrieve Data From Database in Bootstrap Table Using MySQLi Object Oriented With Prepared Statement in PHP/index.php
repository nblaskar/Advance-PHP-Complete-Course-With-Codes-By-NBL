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
        // die("Connection Failed");
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
?>
<!-- Bootstrap started -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Programming</title>
  </head>
  <body>
     <div class="container">
      <h1>Student Information</h1>
      <?php
         //Data Retraieving

         //Select The Data
         $sql="SELECT * FROM student";

         //Prepare Statement
         $result=$conn->prepare($sql);

         //Bind Result Set in Variables
         $result->bind_result($id,$name,$roll,$address);

         //Execute Prepared Statement
         $result->execute();

         //Store Result
         $result->store_result();

         //Track Number of Rows
         $total_rows=$result->num_rows;

         if($total_rows> 0){
            echo '<table class="table">';
               echo "<thead>";
                  echo "<tr>";
                     echo "<th>ID</th>";
                     echo "<th>Name</th>";
                     echo "<th>Roll</th>";
                     echo "<th>Address</th>";
                  echo "</tr>";
               echo "</thead>";
               echo "<tbody>";
               //Fetch all table data
                  while($result->fetch()){
                     echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $roll . "</td>";
                        echo "<td>" . $address . "</td>";
                     echo "</tr>";
                  }
                  echo "</tbody>";
                  echo '</table>';        
         } else{
            echo "No Data Found!";
         }

         //Free Up the $result
         $result->free_result();

         //Close Prepared Statement
         $result->close();

         //Close Connection
         $conn->close();

      ?>
     </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
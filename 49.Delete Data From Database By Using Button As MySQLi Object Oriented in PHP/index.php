<?php
//Connection Creation
    $db_host="localhost";
    $db_root="root";
    $db_password="";
    $db_name="nbldb";
     // Create Connection
     $conn= new mysqli($db_host, $db_root,$db_password, $db_name);
     // Check Connection
     if($conn->connect_error){
        // die("Connection Failed");
        die("Connection Failed");
     }
     echo "Connected Successfully <hr>";
    //Deletion Process
    if(isset($_REQUEST['delete'])){
      $sql="DELETE FROM student   WHERE id ={$_REQUEST['id']}";
      if($conn->query($sql)===TRUE){
         echo "Deleted Successful";
      }
      else{
         echo "Unable to Delete";
      }
    }

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
         $sql="SELECT * FROM student";
         $result=$conn->query($sql);
         if($result->num_rows > 0){
            echo '<table class="table">';
               echo "<thead>";
                  echo "<tr>";
                     echo "<th>ID</th>";
                     echo "<th>Name</th>";
                     echo "<th>Roll</th>";
                     echo "<th>Address</th>";
                     echo "<th>Action</th>";
                  echo "</tr>";
               echo "</thead>";
               echo "<tbody>";
                  while($rows=$result->fetch_assoc()){
                     echo "<tr>";
                        echo "<td>" . $rows["id"] . "</td>";
                        echo "<td>" . $rows["name"] . "</td>";
                        echo "<td>" . $rows["roll"] . "</td>";
                        echo "<td>" . $rows["address"] . "</td>";
                        echo '<td> <form action="" method="POST"><input type="hidden" name="id" value='.$rows['id'].'>
                        <input type="submit" class="btn btn-danger" name="delete" Value="Delete" ></form></td>';
                     echo "</tr>";
                  }
                  echo "</tbody>";
                  echo '</table>';        
         } else{
            echo "No Data Found!";
         }
         $conn->close();

      ?>
     </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
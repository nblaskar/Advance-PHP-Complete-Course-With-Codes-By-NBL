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
    if(isset($_REQUEST['delete'])){
      $sql="DELETE FROM student   WHERE id ={$_REQUEST['id']}";
      if(mysqli_query($conn,$sql)){
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
         $result=mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0){
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
                  while($rows=mysqli_fetch_assoc($result)){
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

      ?>
     </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
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
      
         //DELETE SQL Statement
         $sql="DELETE FROM student WHERE id=?";

         //Prepare Statement
         $result=mysqli_prepare($conn,$sql);

         if($result){

            //Bind Variables to Prepare Statement as Parameter
            mysqli_stmt_bind_param($result, 'i',$id);

            //Variables and values
            $id=$_REQUEST['id'];

            
            //Execute Prepared Statement
            mysqli_stmt_execute($result);

            //Total Rows Affected
            echo mysqli_stmt_affected_rows($result)."Row Deleted<br>";

         }else{
            echo "Unable to Delete";
         }

         //Close Prepared Statement
         mysqli_stmt_close($result);


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
         
         //Select The Data
         $sql="SELECT * FROM student";

         //Prepare Statement
         $result=mysqli_prepare($conn,$sql);

         //Bind Result Set in Variables
         mysqli_stmt_bind_result($result,$id,$name,$roll,$address);

         //Execute Prepared Statement
         mysqli_stmt_execute($result);

         //Store Result
         mysqli_stmt_store_result($result);

         //Track Number of Rows
         $total_rows=mysqli_stmt_num_rows($result);

         if($total_rows > 0){
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
                  while(mysqli_stmt_fetch($result)){
                     echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $roll . "</td>";
                        echo "<td>" . $address . "</td>";
                        echo '<td> <form action="" method="POST"><input type="hidden" name="id" value='.$id.'>
                        <input type="submit" class="btn btn-danger" name="delete" Value="Delete" ></form></td>';
                     echo "</tr>";
                  }
                  echo "</tbody>";
                  echo '</table>';        
         } else{
            echo "No Data Found!";
         }
         //Close Prepared Statement
         mysqli_stmt_close($result);
         //Close Connection
         mysqli_close($conn); 

      ?>
     </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
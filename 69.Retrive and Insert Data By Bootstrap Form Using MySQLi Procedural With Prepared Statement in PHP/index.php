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
     //Form Validation
     if(isset($_REQUEST["submit"])){

        if(($_REQUEST["name"]=="") || ($_REQUEST["roll"]=="") ||($_REQUEST["address"]=="")){

           echo "<small>Fill All Fields...</small><hr>";
        }
        else{
         //Data Insertion
      
         //INSERT SQL Statement
         $sql="INSERT INTO student (name,roll,address) VALUES (?, ?, ?)";

         //Prepare Statement
         $result=mysqli_prepare($conn,$sql);

         if($result){
            //Bind Variables to Prepare Statement as Parameter
            mysqli_stmt_bind_param($result, 'sis',$name, $roll, $address);

            //Variables and values
            $name=$_REQUEST['name'];
            $roll=$_REQUEST['roll'];
            $address=$_REQUEST['address'];
            
            //Execute Prepared Statement
            mysqli_stmt_execute($result);

            //Total Rows Affected
            echo mysqli_stmt_affected_rows($result)."Row Inserted<br>";

         }else{
            echo "Unable to insert";
         }

         //Close Prepared Statement
         mysqli_stmt_close($result);            
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
         <div class="row">
            <div class="col-sm-4">
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" name="name" id="name">
                  </div>
                  <div class="form-group">
                     <label for="roll">Roll</label>
                     <input type="text" class="form-control" name="roll" id="roll">
                  </div>
                  <div class="form-group">
                     <label for="address">Address</label>
                     <input type="text" class="form-control" name="address" id="address">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </form>
            </div>
            <div class="col-sm-4 offset-sm-2">
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
                           while(mysqli_stmt_fetch($result)){
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
                  mysqli_stmt_free_result($result);

                  //Close Prepared Statement
                  mysqli_stmt_close($result);

                  //Close Connection
                  mysqli_close($conn);

              ?>
            <div>
         </div>
      
     </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
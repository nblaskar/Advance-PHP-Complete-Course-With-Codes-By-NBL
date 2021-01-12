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
         $result=$conn->prepare($sql);

         if($result){
            //Bind Variables to Prepare Statement as Parameter
            $result->bind_param('sis',$name, $roll, $address);

            //Variables and values
            $name=$_REQUEST['name'];
            $roll=$_REQUEST['roll'];
            $address=$_REQUEST['address'];
            
            //Execute Prepared Statement
            $result->execute();

            //Total Rows Affected
            echo $result->affected_rows ."Row Inserted<br>";

         }else{
            echo "Unable to insert";
         }

         //Close Prepared Statement
         $result->close();            
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
                  $result=$conn->prepare($sql);

                  //Bind Result Set in Variables
                  $result->bind_result($id,$name,$roll,$address);

                  //Execute Prepared Statement
                  $result->execute();

                  //Store Result
                  $result->store_result();

                  //Track Number of Rows
                  $total_rows=$result->num_rows();

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
            <div>
         </div>
      
     </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
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
      if(isset($_REQUEST['update'])){

         if(($_REQUEST["name"]=="") || ($_REQUEST["roll"]=="") ||($_REQUEST["address"]=="")){
 
            echo "<small>Fill All Fields...</small><hr>";
         }
         else{
            //Data Updation
         
            //UPDATE SQL Statement
            $sql="UPDATE student SET name=?, roll=?, address=? WHERE id=?";
   
            //Prepare Statement
            $result=mysqli_prepare($conn,$sql);
   
            if($result){
               //Bind Variables to Prepare Statement as Parameter
               mysqli_stmt_bind_param($result, 'sisi',$name, $roll, $address, $id);
   
               //Variables and values
               $name=$_REQUEST['name'];
               $roll=$_REQUEST['roll'];
               $address=$_REQUEST['address'];
               $id=$_REQUEST['id'];
               
               //Execute Prepared Statement
               mysqli_stmt_execute($result);
   
               //Total Rows Affected
               echo mysqli_stmt_affected_rows($result)."Row Updated<br>";
   
            }else{
               echo "Unable to Update";
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
         <!-- Click edit to add data into form Filed -->
         <?php

            if(isset($_REQUEST['edit'])){

               //SELECT SQL Statement
               $sql="SELECT * FROM student WHERE id=?";

               //Prepare Statement
               $result=mysqli_prepare($conn,$sql);


               //Bind param
               mysqli_stmt_bind_param($result,'i',$id);
               $id=$_REQUEST['id'];

               //Bind Result Set in Variables
               mysqli_stmt_bind_result($result,$id, $name,$roll,$address);

               //Execute Prepared Statement
               mysqli_stmt_execute($result);

               //Fetch Single Row Data
               mysqli_stmt_fetch($result);

               //Close Prepared Statement//Important
               mysqli_stmt_close($result);
               
            }         
             ?>
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" name="name" id="name" 
                     value="<?php if(isset($name)){ echo $name;} ?>">
                  </div>
                  <div class="form-group">
                     <label for="roll">Roll</label>
                     <input type="text" class="form-control" name="roll" id="roll"
                     value="<?php if(isset($roll)){ echo $roll;} ?>">
                  </div>
                  <div class="form-group">
                     <label for="address">Address</label>
                     <input type="text" class="form-control" name="address" id="address"
                     value="<?php if(isset($address)){ echo $address;} ?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <button type="submit" class="btn btn-success" name="update">Update</button>
               </form>
         </div>
         <!--  Data View-->
         <div class="col-sm-6 offset-sm-2">
               <?php
               //Data Retriving
               
                  //SELECT SQL Statement
                  $sql="SELECT * FROM student";

                  //Prepare Statement
                  $result=mysqli_prepare($conn, $sql);

                  //Bind result Set in  Variables
                  mysqli_stmt_bind_result($result,$id, $name,$roll, $address);

                  //Execute Prepared Statement
                  mysqli_execute($result);

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
                                 <input type="submit" class="btn btn-danger" name="edit" Value="Edit" ></form></td>';
                              echo "</tr>";
                           }
                           echo "</tbody>";
                           echo '</table>';        
                  } else{
                     echo "No Data Found!";
                  }

                  //Free Up Store Result
                  mysqli_stmt_free_result($result);              

                  //Close Prepared Statement
                   mysqli_stmt_close($result); 

                   //Close Connection
                   mysqli_close($conn); 

                ?>
         
         </div>


      </div>
      
     </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
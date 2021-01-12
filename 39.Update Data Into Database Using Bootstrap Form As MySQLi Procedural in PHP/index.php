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
          $name=$_REQUEST['name'];
          $roll=$_REQUEST['roll'];
          $address=$_REQUEST['address'];
          $sql="UPDATE student SET name='$name', roll='$roll', address='$address' WHERE id={$_REQUEST['id']} ";
           if(mysqli_query($conn,$sql)){
              echo "Updated Successfully";
           } else{
              echo "Unable to Update";
           }
  
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
               $sql="SELECT * FROM student WHERE id={$_REQUEST['id']}";
               $result=mysqli_query($conn,$sql);
               $rows=mysqli_fetch_assoc($result);               
            }         
             ?>
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" name="name" id="name" 
                     value="<?php if(isset($rows["name"])){ echo $rows["name"];} ?>">
                  </div>
                  <div class="form-group">
                     <label for="roll">Roll</label>
                     <input type="text" class="form-control" name="roll" id="roll"
                     value="<?php if(isset($rows["roll"])){ echo $rows["roll"];} ?>">
                  </div>
                  <div class="form-group">
                     <label for="address">Address</label>
                     <input type="text" class="form-control" name="address" id="address"
                     value="<?php if(isset($rows["address"])){ echo $rows["address"];} ?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $rows["id"] ?>">
                  <button type="submit" class="btn btn-success" name="update">Update</button>
               </form>
         </div>
         <!--  Data View-->
         <div class="col-sm-6 offset-sm-2">
               <?php
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
                                 <input type="submit" class="btn btn-danger" name="edit" Value="Edit" ></form></td>';
                              echo "</tr>";
                           }
                           echo "</tbody>";
                           echo '</table>';        
                  } else{
                     echo "No Data Found!";
                  }

                ?>
         
         </div>


      </div>
      
     </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
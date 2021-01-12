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
     //Form Validation
     if(isset($_REQUEST["submit"])){

        if(($_REQUEST["name"]=="") || ($_REQUEST["roll"]=="") ||($_REQUEST["address"]=="")){

           echo "<small>Fill All Fields...</small><hr>";
        }else{
         //Data Insertion
         $name=$_REQUEST['name'];
         $roll=$_REQUEST['roll'];
         $address=$_REQUEST['address'];
         $sql="INSERT INTO Student (name, roll, address) VALUES('$name','$roll','$address')";
          if($conn->query($sql)===TRUE){
             echo "Inserted Successfully";
          } else{
             echo "Unable to insert Successfully";
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
         </div>
      
     </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
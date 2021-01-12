<?php
//Create Variable For Connection
$dsn="mysql:host=localhost;dbname=nbldb;";
$db_user="root";
$db_password="";
//Create Connection with Excxeption Handling
try{
   // Create Connection
   $conn= new PDO($dsn, $db_user, $db_password);
   //Set Error Mode
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected <hr><br>";
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
            $affected_row=$conn->exec($sql);
            echo $affected_row . "Row Inserted <br>"; 
      }
   }
}
catch(PDOException $e){
   echo "Connection Failed".$e->getMessage();
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
         <div class="row">
            <div class="col-sm-4 ">
            <!-- Data Insertinon Process  -->
            <h1>Information Storing</h1>
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
            <!-- Data View Process -->
            <h1>Information View</h1>
            <?php
         //Data Retraieving
         $sql="SELECT * FROM student";
         $result=$conn->query($sql);
         if($result->rowCount() > 0){
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
                  while($rows=$result->fetch(PDO::FETCH_ASSOC)){
                     echo "<tr>";
                        echo "<td>" . $rows["id"] . "</td>";
                        echo "<td>" . $rows["name"] . "</td>";
                        echo "<td>" . $rows["roll"] . "</td>";
                        echo "<td>" . $rows["address"] . "</td>";
                     echo "</tr>";
                  }
                  echo "</tbody>";
                  echo '</table>';        
         } else{
            echo "No Data Found!";
         }
         $conn=null;
      ?>
            </div>
         </div>
      
     </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
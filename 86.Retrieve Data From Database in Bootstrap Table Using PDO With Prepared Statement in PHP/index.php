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
      <h1>Student Information</h1>
      <?php
         //Data Retraieving
         //SELECT SQL Statement
         $sql="SELECT * FROM student";

         //Prepare Statement
         $result=$conn->prepare($sql);

         //Execute Prepared Statement
         $result->execute();

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
         //Close Prepared Statement
         unset($result);
         
         //Close Connection
         $conn=null;
      ?>
     </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>   
  </body>
</html>
<?php
// -------Start Connection Creation------------
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
// -------End Connection Creation------------


// -------Start Data Insertion Process------------

   // Process-1
   //---Using Anonymous Positional Placeholder 

// try{
//    //-----(a)With Binding--------

   // //SELECT SQL Statement
   // $sql="INSERT INTO student (name,roll,address) VALUES(?, ?, ?)";

   // //Prepare Statement
   // $result=$conn->prepare($sql);

   // //Bind parameter to Prepared Statement
   // $result->bindParam(1,$name,PDO::PARAM_STR);
   // $result->bindParam(2,$roll,PDO::PARAM_INT);
   // $result->bindParam(3,$address,PDO::PARAM_STR);

   // //Variables and Values
   // $name="Firdaus";
   // $roll="105";                        //OR
   // $address="Guwahati";
   
   // //Bind Params By bindValue()

   // // $result->bindValue(1,$name);
   // // $result->bindValue(2,$roll);
   // // $result->bindValue(3,$address);

   // //Execute Prepared Statement
   // $result->execute();

   
   // // Number of row Inserted
   // echo $result->rowCount()."Row Inserted";

//  //-----(b)Without Binding--------

   // //SELECT SQL Statement
   // $sql="INSERT INTO student (name,roll,address) VALUES(?, ?, ?)";

   // //Prepare Statement
   // $result=$conn->prepare($sql);

   // //Execute Prepared Statement
   // // $result->execute(array('Firdaus',105,'Guwahati'));

   // //OR

   //    $name="Firdaus";
   //    $roll="105";         
   //    $address="Guwahati";

   // //Execute Prepared Statement
   // $result->execute(array($name,$roll,$address));


   // //Number of row Inserted
   // echo $result->rowCount()."Row Inserted";
// }

// Process-2
//---Using Anonymous Named Placeholder

try{
   //-----(a)With Binding--------

   //SELECT SQL Statement
   $sql="INSERT INTO student (name,roll,address) VALUES(:name, :roll, :address)";

   //Prepare Statement
   $result=$conn->prepare($sql);

   //Bind parameter to Prepared Statement
   $result->bindParam(':name',$name,PDO::PARAM_STR);
   $result->bindParam(':roll',$roll,PDO::PARAM_INT);
   $result->bindParam(':address',$address,PDO::PARAM_STR);

   //Variables and Values
   $name="Firdaus";
   $roll="105";                        //OR
   $address="Guwahati";
   
   //Bind Params By bindValue()
   // $result->bindValue(':name',$name);
   // $result->bindValue(':roll',$roll);
   // $result->bindValue(':address',$address);

   //Execute Prepared Statement
   $result->execute();

   
   // //Number of row Inserted
   echo $result->rowCount()."Row Inserted";

//  -----(b)Without Binding--------

   //SELECT SQL Statement
   $sql="INSERT INTO student (name,roll,address) VALUES(:name, :roll, :address)";

   //Prepare Statement
   $result=$conn->prepare($sql);

   //Execute Prepared Statement
   // $result->execute(array(':name'=>'Firdaus',':roll'=>105,':address'=>'Guwahati'));

   //OR

      $name="Firdaus";
      $roll="105";         
      $address="Guwahati";

   //Execute Prepared Statement
   $result->execute(array(':name'=>$name,':roll'=>$roll,':address'=>$address));


   //Number of row Inserted
   echo $result->rowCount()."Row Inserted";
}


catch(PDOException $e){
   // Error Message
   echo $e->getMessage();
}
 
//Close Prepared Statement
unset($result);






//Close Connection
$conn=null;



     
?>
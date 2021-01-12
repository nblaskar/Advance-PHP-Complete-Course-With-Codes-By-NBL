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


// -------Start Data Updation Process------------

//---Using Named Placeholder

try{

   //UPDATE SQL Statement
   $sql="UPDATE student SET name=:name, roll=:roll, address=:address WHERE id=:id";
   //Prepare Statement
   $result=$conn->prepare($sql);

      //-----(a)With Binding--------

   // //Bind parameter to Prepared Statement
   // $result->bindParam(':name',$name,PDO::PARAM_STR);
   // $result->bindParam(':roll',$roll,PDO::PARAM_INT);
   // $result->bindParam(':address',$address,PDO::PARAM_STR);
   // $result->bindParam(':id',$id,PDO::PARAM_INT);

   // //Variables and Values
   // $name="Firdaus";
   // $roll="105";                        
   // $address="Guwahati";
   // $id=4;

   // //Execute Prepared Statement
   // $result->execute();


      //-----(b)Without Binding--------

   //Variables and Values
   $name="Firdaus";
   $roll="105";                        
   $address="Guwahati";
   $id=4;

  //Execute Prepared Statement
   $result->execute(array(':name'=>$name,':roll'=>$roll,':address'=>$address, ':id'=>$id));



   
   // //Number of row Updated
   echo $result->rowCount()."Row Updated";


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
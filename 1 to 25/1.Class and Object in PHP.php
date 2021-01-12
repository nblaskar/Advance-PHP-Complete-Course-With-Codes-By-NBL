<?php
//Example of a class and object
   // class Mobile{
   //    var $model; //Properties
   //    function showModel($number){
   //       // global $model;
   //       // $model=$number;
   //       // echo "Model Number is: $model <br>";
   //       //OR
   //       $this->model=$number;
   //       echo "Model Number is: $this->model <br>";

         
   //    }
   // }
   // $samsung= new Mobile;
   // $samsung->showModel('A8');

   // $nokia= new Mobile;
   // $nokia->showModel('N73');


//To access and manipulate the Properties from outside of a class 
   class Mobile{
      var $model; //Properties
      function showModel(){
         echo "Model Number is: $this->model <br>";         
      }
   }
   $samsung= new Mobile;
   $samsung->model="N73";
   $samsung->showModel();

   $lg= new Mobile;
   $lg->model="X3";
   $lg->showModel();
?>
<?php
   class Mobile{
      public $model;
      function showModel(){
        echo $this->model;         
      }
   }
   $samsung= new Mobile;
   $samsung->model="N8";
   $samsung->showModel();

?>
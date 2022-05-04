<?php

 class Connection{

    
  public static function  conectar()
  {

      try{
          $con = pg_connect("host=localhost port=5432 dbname=empresa user=postgres password=michael") 
          or die('No se ha podido conectar: '.pg_last_error());
          return $con;
         
      } catch(Exception $e){
          echo $e->getMessage();
         }
  }

}
?>
<?php
include_once "../modelo/departamento.php";

  $obj=new departamento();
  $registros=$obj->seleccionar();
  //print_r($registros);
  
  ?>
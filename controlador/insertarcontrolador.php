<?php
require_once '../modelo/departamento.php';

if(isset($_POST['iddepartamento'])){ 
    $nombredepartamento = $_POST['nombredepartamento'];
    $iddepartamento = $_POST['iddepartamento'];
    $obj=new departamento();
    $obj->insertar($nombredepartamento,$iddepartamento);
   
  }

// $nombredepartamento = $_POST['nombredepartamento'];
// $iddepartamento = $_POST['iddepartamento'];

//  $obj=new departamento();
//  $obj->insertar($nombredepartamento,$iddepartamento);

?>

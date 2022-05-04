<?php

include_once ('../controlador/actualizarcontrolador.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../registro.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="title">Actualizacion</h1>
    <form class="card"  action="../controlador/actualizarcontrolador.php" method ="post">
      <label for="email">nombre departamento</label>
      <input id="email" name="nombredepartamento" type="" value="">
      <label for="pass">id departamento</label>
      <input id="pass" name="iddepartamento" type="pass" value=" "> 
      <input type="submit" name="submit" class="btn" value="Actualizar">
      <!-- <div><a class="btn_dos" href="../vista/leervista.php">registro</a></div> -->
    </form >
  </div>
</body>
</html>


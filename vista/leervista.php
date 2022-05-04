<?php 
    include_once ('../controlador/leercontrolador.php'); 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista.css">
    <title>Document</title>
</head>
<body>
    <table class="card">

        <thead>
            <tr>
                <th>nombre departamento</th>
                <th>id departamento</th>
                <th>operaciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($registros as $record){ ?>
            <tr>
            <form action="actualizarvista.php" method="post">
                <td name="nombredepartamento"class="texto"><?php echo "$record[nombredepartamento]"?></td>
                <td class="texto"><?php echo "$record[iddepartamento]"?></td>
                <td>
                    <div class="boton">
                    
                        <a class="btn"  href="actualizarvista.php?upd=<?=$record['iddepartamento']?>">Editar</a>
                        <a class="btn" href="eliminarvista.php?upd=<?=$record['iddepartamento']?>">eliminar</a>
                        
                    </div>
                </td>
            </tr>
         <?php } ?>            
        </tbody>
    </table>
    <a class="btn" href="registro.php">agregar</a>
</body>
</html>
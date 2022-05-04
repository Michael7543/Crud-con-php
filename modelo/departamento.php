<?php

include_once ("conexion.php");
class departamento{
    function insertar( $nombredepartamento, $iddepartamento ){
        return pg_query(Connection::conectar(),"insert into departamento values('$nombredepartamento',$iddepartamento)");
    }
   
    

        function seleccionar(){
        $resp = pg_query(Connection::conectar(),"select * from departamento order by iddepartamento");
        $datos=pg_fetch_all($resp);
        return $datos;
       }

       function actualizar($nombredepartamento,$iddepartamento){
        return pg_query(Connection::conectar(),"update departamento set nombredepartamento='$nombredepartamento'  where iddepartamento='$iddepartamento'");
      }

      function eliminar($iddepartamento){
        return pg_query(Connection::conectar(),"delete from departamento where iddepartamento='$iddepartamento'");
      }
}


?>
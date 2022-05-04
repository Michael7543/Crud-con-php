<?php
require_once  '../modelo/prueba.php';//instancia importar elementos de otros documentos 
// require_once  '../modelo/cliente.php';

$obj= new Prueba();//Constructor es un objeto de la clase que vamos a usar
$obj->salir();

//pagina dinamica hay iteractividad con los datos y estatica nos muestra videos.etc
//un sitio web es la convinacion de pagina dinamica y estatica

 $obj= new Cliente();//Constructor
 $obj->insertar();
 $obj->eliminar();
 $obj->actualizar();
 $obj->seleccionar();





 class Cliente 
 {
   static public $nombre_completo = 'Cliente desconocido';
   protected $id = 1001;

 }

 print Cliente::$nombre_completo;
 print Cliente::$id;
?>




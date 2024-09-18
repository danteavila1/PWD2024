<?php
include_once '../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new MostrarMensaje();
$cadenaDatos = $obj->mostrarMensaje($datos);

echo $cadenaDatos;
?>
<br /><a href="ej3.php">Volver <a></a>
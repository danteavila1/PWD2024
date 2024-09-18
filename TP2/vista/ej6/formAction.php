<?php
include_once '../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new MostrarMensaje2();
$cadenaDatos = $obj->datosPersonales($datos);

echo $cadenaDatos;
?>
<br /><a href="ej6.php">Volver <a></a>
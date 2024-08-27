<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new MostrarMensaje1();
$cadenaDatos = $obj->datosPersonales($datos);

echo $cadenaDatos;
?>
<br /><a href="ej5.php">Volver <a></a>
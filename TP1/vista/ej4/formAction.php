<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new VerMayorMenor();
$cadenaDatos = $obj->datosPersonales($datos);

echo $cadenaDatos;
?>
<br /><a href="ej4.php">Volver <a></a>
<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new CuentaHoras();
$respuesta = $obj->sumarHoras($datos);

echo $respuesta;
?>
<br/><a href="ej2.php">Volver <a></a>
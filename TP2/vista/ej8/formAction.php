<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new CalcularTarifa();
$tarifa = $obj->calcularTarifa($datos);

echo $tarifa;
?>
<br /><a href="ej8.php">Volver <a></a>
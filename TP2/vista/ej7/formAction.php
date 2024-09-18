<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new Resultado();
$resultado = $obj->calcular($datos);

echo $resultado;
?>
<br /><a href="ej7.php">Volver <a></a>
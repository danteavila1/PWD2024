<?php
include_once '../../../configuracion.php';

//Obtengo los datos del formulario que encapsulé
$datos = data_submitted();

//Creo instancia del objeto y proceso los datos
$obj = new VerNumero();
$respuesta = $obj->vernumero($datos);

echo $respuesta;
?>
<br /><a href="ej1.php">Volver <a></a>
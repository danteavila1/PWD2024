<?php header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO = '/PWD2024/'; //Variable que almacena el directorio del proyecto

$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

include_once($ROOT . '/TP1/utiles/funciones.php');

$_SESSION['ROOT'] = $ROOT;

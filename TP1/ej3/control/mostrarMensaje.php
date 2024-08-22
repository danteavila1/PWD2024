<?php

if($_POST){
    $nombre = $_POST['nombre_form'];
    $apellido = $_POST['apellido_form'];
    $edad = $_POST['edad_form'];
    $direccion = $_POST['direccion_form'];
}
    echo "<p>Hola, yo soy ".$nombre." ". $apellido. " tengo ".$edad." y vivo en ".$direccion."</p>";

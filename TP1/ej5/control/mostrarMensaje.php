<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nombre = $_GET['nombre_form'];
    $apellido = $_GET['apellido_form'];
    $edad = $_GET['edad_form'];
    $direccion = $_GET['direccion_form'];
    $sexo = $_GET['sexo_form'];
    $estudios = $_GET['estudios_form'];

    echo "<p>Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Dirección: " . $direccion . "</br>Sexo: " . $sexo . "</br>Estudios: " . $estudios . "</br>";
}
    

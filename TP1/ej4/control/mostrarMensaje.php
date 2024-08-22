<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nombre = $_GET['nombre_form'];
    $apellido = $_GET['apellido_form'];
    $edad = $_GET['edad_form'];
    $direccion = $_GET['direccion_form'];

    if($edad>=18){
        echo "<p>La persona es mayor de edad";
    } else {
        echo "<p>La persona es menor de edad";
    }
}
    

<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $edad = $_GET['edad'];
    $estudios = $_GET['estudia'];

    $tarifa = 300;

    if ($estudios == "si") {
         if ($edad < 12) {
            $tarifa = 160;
        } else {
            $tarifa = 180;
        }
    }
    echo "Su tarifa es de $" . $tarifa;
}
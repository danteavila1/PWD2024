<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];

    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            $resultado = $num1 / $num2;
            break;
    }
    echo "El resultado es: " . $resultado;
}
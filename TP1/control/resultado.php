<?php

class Resultado
{
    /**
     * Recibe un array con dos números y un tipo de operación, 
     * retorna resultado de la misma
     * @param array $datos
     * @return string
     */
    public function calcular($datos)
    {
        $num1 = $datos['num1'];
        $num2 = $datos['num2'];
        $operacion = $datos['operacion'];
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
        $mensaje = "El resultado es: " . $resultado;
        return $mensaje;
    }
}

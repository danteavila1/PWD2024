<?php  

class VerNumero {

    //CONSTRUCTOR
    public function __construct() {}

    /**
     * Recibe arreglo con un número, retorna si es positivo, negativo o igual a 0
     * @param array $dato
     * @return string
     */
    public function vernumero($dato) {

    $numero = $dato['numero_form'];

        if ($numero > 0) {
            $tipoNumero = "El número es positivo<br>";
        } elseif ($numero < 0) {
            $tipoNumero = "El número es negativo<br>";
        } else {
            $tipoNumero = "El número es cero<br>";
        }

    return $tipoNumero;
    }
}

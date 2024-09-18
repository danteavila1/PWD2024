<?php
class CalcularTarifa
{
    //CONSTRUCTOR
    public function __construct() {}

    /**
     * Recibe array con datos, retorna monto de tarifa
     * @param array $datos
     * @return string
     */
    public function calcularTarifa($datos)
    {
        $edad = $datos['edad'];
        $estudios = $datos['estudia'];

        $tarifa = 300;

        if ($estudios == "si") {
            if ($edad < 12) {
                $tarifa = 160;
            } else {
                $tarifa = 180;
            }
        }
        $mensaje = "Su tarifa es de $" . $tarifa;
        return $mensaje;
    }
}

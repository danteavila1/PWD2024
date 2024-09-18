<?php
class MostrarMensaje
{
    //CONSTRUCTOR
    public function __construct() {}

    /**
     * Recibe array con datos personales, retorna string con saludo
     * @param array $datos
     * @return string
     */
    public function mostrarMensaje($datos)
    {
        $nombre = $datos['nombre_form'];
        $apellido = $datos['apellido_form'];
        $edad = $datos['edad_form'];
        $direccion = $datos['direccion_form'];

        $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;

        return $respuesta;
    }
}
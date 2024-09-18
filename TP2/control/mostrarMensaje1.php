<?php
class MostrarMensaje1
{
    /**
     * Recibe array con datos, retorna cadena de string con ellos
     * @param array $datos
     * @return string
     */
    public function datosPersonales($datos)
    {
        $nombre = $datos['nombre_form'];
        $apellido = $datos['apellido_form'];
        $edad = $datos['edad_form'];
        $direccion = $datos['direccion_form'];
        $estudios = $datos['estudios_form'];
        $sexo = $datos['sexo_form'];

        if ($edad >= 18) {
            $textoEdad = "</br>Es mayor de edad";
        } else {
            $textoEdad = "</br>Es menor de edad";
        }

        $mensaje = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad .
            "</br>Dirección: " . $direccion . "</br>Sexo: " . $sexo . "</br>Estudios: " . $estudios .
            "</br>" . $textoEdad . "</br>";

        return $mensaje;
    }
}
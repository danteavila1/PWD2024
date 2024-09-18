<?php

class Persona
{
    //ATRIBUTOS
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;

    /**
     * Crea un objeto de tipo Persona
     */
    public function __construct()
    {
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->mensajeoperacion = "";
    }

    /**
     * Actualiza los atributos del objeto por los recibidos por parámetro
     * @param string $nroDni
     * @param string $apellido
     * @param string $nombre
     * @param string $fechaNac
     * @param string $telefono
     * @param string $domicilio
     */
    public function setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    //GETTERS
    public function getNroDni()
    {
        return $this->nroDni;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }

    //SETTERS
    public function setNroDni($nroDni)
    {
        $this->nroDni = $nroDni;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setfechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }
    public function setmensajeoperacion($mensajeoperacion)
    {
        $this->mensajeoperacion = $mensajeoperacion;
    }

    // MÉTODOS PROPIOS DE LA CLASE

    /**
     * Toma el atributo donde está cargado el id del objeto y lo utiliza para realizar
     * una consulta a la base de datos con el objetivo de actualizar el resto de los atributos del objeto.
     * Retora un booleano que indica el éxito o falla de la operación
     * @return boolean
     */
    public function cargar()
    {
        $exito = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = " . $this->getNroDni();

        //Verifica si está activa la base de datos
        if ($base->Iniciar()) {

            //Ejercuta la consulta (en este caso es un SELECT, debe devolver un arreglo de registros)
            $res = $base->Ejecutar($sql);

            //Si $res es mayor a -1 quiere decir que la consulta se ejecutó con éxito
            if ($res > -1) {

                //Si $res es mayor a 0 quiere decir que la consulta generó al menos 1 registro
                if ($res > 0) {

                    /*Guardo en el arreglo $row el resultado del primer registro obtenido y seteo
                    esos valores al objeto Persona actual*/
                    $row = $base->Registro();

                    $this->setear(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );

                    $exito = true;
                }
            }
        } else {
            $this->setmensajeoperacion("Persona->listar: " . $base->getError());
        }
        return $exito;
    }

    /**
     * Lee los valores actuales de los atributos del objeto e inserta un nuevo
     * registro en la base de datos a partir de ellos.
     * Retorna un booleano que indica si le operación tuvo éxito
     * @return boolean
     */
    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES(
            '" . $this->getNroDni() . "', 
            '" . $this->getApellido() . "', 
            '" . $this->getNombre() . "', 
            '" . $this->getFechaNac() . "',
            '" . $this->getTelefono() . "', 
            '" . $this->getDomicilio() . "'
            );";

        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                //Este objeto no tiene id con autoincrement
                // $this->setNroDni($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Lee los valores actuales de los atributos del objeto y los actualiza en la
     * base de datos.
     * Retorna un booleano que indica si le operación tuvo éxito
     * @return boolean
     */
    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "UPDATE persona SET 
        NroDni = '" . $this->getNroDni() . "', 
        Apellido = '" . $this->getApellido() . "', 
        Nombre = '" . $this->getNombre() . "', 
        fechaNac = '" . $this->getFechaNac() . "', 
        Telefono = '" . $this->getTelefono() . "', 
        Domicilio = '" . $this->getDomicilio() . "' 
        WHERE NroDni = '" . $this->getNroDni() . "'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Lee el id actual del objeto y si puede lo borra de la base de datos
     * Retorna un booleano que indica si le operación tuvo éxito
     * @return boolean
     */
    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "DELETE FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Recibe condiciones de busqueda en forma de consulta sql para obtener
     * los registros requeridos.
     * Si por parámetro se envía el valor "" se devolveran todos los registros de la tabla
     * 
     * La función devuelve un arreglo compuesto por todos los objetos que cumplen la condición indicada
     * por parámetro
     * @return array
     */
    public function listar($parametro)
    {
        $arreglo = array();
        $base = new BaseDatos();

        $sql = "SELECT * FROM persona ";

        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }

        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {

                    $obj = new Persona();
                    $obj->setear(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setmensajeoperacion("Persona->listar: " . $base->getError());
        }
        return $arreglo;
    }

    /**
     * Esta función lee todos los valores de todos los atributos del objeto y los devuelve
     * en un arreglo asociativo
     * @return array
     */
    public function obtenerInfo()
    {
        $info = [];
        $info['nroDni'] = $this->getNroDni();
        $info['apellido'] = $this->getApellido();
        $info['nombre'] = $this->getNombre();
        $info['fechaNac'] = $this->getFechaNac();
        $info['telefono'] = $this->getTelefono();
        $info['domicilio'] = $this->getDomicilio();

        return $info;
    }
}
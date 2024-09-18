<?php

class AbmAuto
{
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres 
     * de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param)
    {
        $objAuto = null;

        if (
            array_key_exists('patente', $param) &&
            array_key_exists('marca', $param) &&
            array_key_exists('modelo', $param) &&
            array_key_exists('dniDuenio', $param)
        ) {
            $objPersona = new Persona();
            $objPersona->setNroDni($param['dniDuenio']);
            $objPersona->cargar();

            $objAuto = new Auto();

            $objAuto->setear(
                $param['patente'],
                $param['marca'],
                $param['modelo'],
                $objPersona
            );
        }
        return $objAuto;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con 
     * los nombres de las variables instancias del objeto que son claves.
     * 
     * OBSERVACIÓN: Se utiliza este método principalmente para borrar un registro, ya que para ello
     * solamente se necesitan las claves del mismo
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['patente'])) {
            $obj = new Auto();
            $obj->setear($param['patente'], null, null, null);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }

    /**
     * Esta función carga la información de un objeto a la base de datos
     * @param array $param
     * @return boolean
     */
    public function alta($param)
    {
        $resp = false;

        // Si el id del objeto tuviera autoincrement en la base de datos entonces los campos claves 
        // del mismo deberían setearse en nulos al momento de realizar la insersión
        // $param['patente'] = null;

        $obj = $this->cargarObjeto($param);
        if ($obj != null && $obj->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * Permite eliminar un objeto de la base de datos
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;

        // Primero verifica que el campo clave es enviado correctamente como parámetro
        if ($this->seteadosCamposClaves($param)) {

            // Carga solamente la clave recibida por parámetro en el objeto actual ya que es lo único
            // que se necesita para eliminar el resgistro de la base de datos
            $obj = $this->cargarObjetoConClave($param);
            if ($obj != null && $obj->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        $resp = false;

        // Primero verifica que el campo clave es enviado correctamente como parámetro
        if ($this->seteadosCamposClaves($param)) {

            // Para realizar una modificación se debe recibir un arreglo con todos los datos 
            // del registro cargados, tanto los que se desea editar como los que se desea que 
            // permanezcan igual y se lo sobreescribe con la función modificar
            $obj = $this->cargarObjeto($param);
            if ($obj != null and $obj->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Permite buscar un objeto según distintos criterios.
     * Recibe un arreglo indexado que contiene los criterios de busqueda.
     * Retorna un arreglo compuesto por los objetos que cumplen el criterio indicado.
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {

        // Se incia la consulta sql en true por que facilita el armado de la misma
        // según el criterio de busqueda
        $where = " true ";

        if ($param <> NULL) {

            if (isset($param['patente']))
                $where .= " and Patente = '" . $param['patente'] . "'";

            if (isset($param['marca']))
                $where .= " and Marca = '" . $param['marca'] . "'";

            if (isset($param['modelo']))
                $where .= " and Modelo = " . $param['modelo'];

            if (isset($param['dniDuenio']))
                $where .= " and DniDuenio = '" . $param['dniDuenio'] . "'";
        }

        $obj = new Auto();
        $arreglo = $obj->listar($where);

        return $arreglo;
    }

    /**
     * Recibe un arreglo indexado que contiene los criterios de busqueda
     * Devuelve un arreglo con la información de todos los objetos que cumplan la condición
     * recibida por parámetro
     * @param array $param
     * @return array
     */
    public function buscarColInfo($param)
    {
        $colInfo = array();
        $arregloObj = $this->buscar($param);

        if (count($arregloObj) > 0) {

            for ($i = 0; $i < count($arregloObj); $i++) {
                $colInfo[$i] = $arregloObj[$i]->obtenerInfo();
            }
        }
        return $colInfo;
    }
}
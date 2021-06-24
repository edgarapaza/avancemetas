<?php
require_once("Conexion.php");

class AsignacionPersonal
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function Guardar($idoficina,$idarea,$idcargo,$idpersonal,$fecInicioCargo,$documento)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO asignacionpersonal VALUES (null,'$idoficina','$idarea','$idcargo','$idpersonal','$fecInicioCargo',null,'$documento','$fechaActual',null);";

        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    public function MostrarTodo()
    {
        $sql = "SELECT idasignacion,idoficina,idarea,idcargo,idpersonal,fecInicioCargo,fecFinCargo,documento,fecCreate,fecUpdtae FROM asignacionpersonal;";

        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

}
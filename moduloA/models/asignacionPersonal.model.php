<?php
require_once("Conexion.php");

class AsignacionPersonal
{
    private $conn;

    function __construct()
    {
        $link = new Conexion();
        $this->conn = $link->Conectar();
        return $this->conn;
    }

    public function Guardar($idoficina,$idarea,$idcargo,$idpersonal,$fecInicioCargo,$documento)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO asignacionpersonal VALUES (null,'$idoficina','$idarea','$idcargo','$idpersonal','$fecInicioCargo',null,'$documento','$fechaActual',null);";

        if(!$this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }
        return true;
    }

    public function MostrarTodo()
    {
        $sql = "SELECT idasignacion,idoficina,idarea,idcargo,idpersonal,fecInicioCargo,fecFinCargo,documento,fecCreate,fecUpdtae FROM asignacionpersonal;";

        if(!$res = $this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }

        return $res;
    }

}
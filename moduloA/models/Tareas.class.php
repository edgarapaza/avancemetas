<?php
include "Conexion.php";

class Tareas
{
    private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

    public function listado($idpersonal){
        $sql = "";
    }

    public function AsignarTareas($id_personal,$id_institucion,$id_oficina,$id_cargo,$actividad,$unidadMedida,$obs){
        $sql= "SELECT 1+1;";
		if(!$this->conn->query($sql)){
            echo "Error:" . $this->conn->error;
        }
        echo $sql;
        return true;
        $this->conn->close();
    }

}

$tareas = new Tareas();
$tareas->AsignarTareas('uno','dos','tres','cuatro','cinco','seis','siete');
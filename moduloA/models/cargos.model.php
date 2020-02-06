<?php
require_once("Conexion.php");

class Cargo
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_oficina,$nombre_cargo)
	{
		$fechaActual = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO cargos VALUES (null,'$id_oficina','$nombre_cargo','$fechaActual');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

	}

	public function Modificar($idcargos,$nombre_cargo)
	{
		$sql = "UPDATE cargos SET nombre_cargo = '$nombre_cargo' WHERE id_cargos = '$idcargos';";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

	}

	public function Consultar()
	{
		$sql = "SELECT id_cargos,id_oficina,nombre_cargo FROM cargos;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error: " . mysqli_error($this->conn);
			exit();	
		}

		return $response;

	}

	public function MostrarCargos($idcargos)
	{
		$sql = "SELECT id_cargos,id_oficina,nombre_cargo,fec_creacion FROM cargos WHERE id_cargos = $idcargos;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo " No se han asignado ningun cargo";
		}
		
		$data = $response->fetch_array(MYSQLI_ASSOC);
		return $data;


	}

	public function NombrePersonal($idpersonal)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE id_personal = $idpersonal;";

        if(!$res = $this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }
        $data = $res->fetch_array(MYSQLI_ASSOC);
        return $data;
    }
}

<?php
require_once("Conexion.php");

class Cargo
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($idoficina,$nombre_cargo,$idarea,$idpersonal)
	{
		$fechaActual = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO cargos VALUES (null,'$idoficina','$nombre_cargo','$fechaActual','$idarea','$idpersonal')";

		$res = $this->conn->ConsultaCon($sql);
        return $res;

	}

	public function Modificar($idcargos,$nombre_cargo)
	{
		$sql = "UPDATE cargos SET nombre_cargo = '$nombre_cargo' WHERE id_cargos = '$idcargos';";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function Consultar()
	{
		$sql = "SELECT id_cargos,id_oficina,nombre_cargo FROM cargos;";
		
		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function MostrarCargos($idcargos)
	{
		$sql = "SELECT id_cargos,id_oficina,nombre_cargo,fec_creacion FROM cargos WHERE id_cargos = $idcargos;";
		
		$res = $this->conn->ConsultaCon($sql);
        return $res;
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

    	public function MostrarCargosAccion($idcargos)
	{

		$sql = "SELECT nombre_cargo FROM cargos WHERE id_cargos = $idcargos;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}
		$data = $response->fetch_array(MYSQLI_ASSOC);

		return $data;
		$this->conn->close();
	}
}

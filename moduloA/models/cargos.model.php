<?php
require_once "Conexion.php";

class Cargo
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre,$id_oficina,$id_areas,$id_personal)
	{
		$fechaActual = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO cargos (id_cargos,nombre,id_oficina,id_areas,id_personal,fec_creacion) VALUES (null,'$nombre','$id_oficina','$id_areas','$id_personal','$fechaActual');";

		$res = $this->conn->ConsultaSin($sql);
        return $res;

	}

	public function Modificar($idcargos,$nombre)
	{
		$sql = "UPDATE cargos SET nombre = '$nombre' WHERE id_cargos = '$idcargos';";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function Consultar()
	{
		$sql = "SELECT id_cargos,nombre,id_oficina,id_areas,id_personal,fec_creacion FROM cargos;";
		
		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function MostrarCargos($idcargos)
	{
		$sql = "SELECT id_cargos,nombre,id_oficina,id_areas,id_personal FROM cargos WHERE id_cargos = $idcargos;";
		
		$res = $this->conn->ConsultaArray($sql);
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

		$sql = "SELECT nombre FROM cargos WHERE id_cargos = $idcargos;";
		
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

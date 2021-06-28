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

	public function Guardar($nombre,$id_areas,$idpersonal)
	{
		$fechaActual = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO cargos (id_cargos,nombre,id_areas,idpersonal,fec_creacion) VALUES (null,'$nombre','$id_areas','$idpersonal','$fechaActual');";

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
		$sql = "SELECT id_cargos, nombre, id_areas, fec_creacion, idpersonal FROM cargos;";		
		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function MostrarCargos($idcargos)
	{
		$sql = "SELECT id_cargos, nombre, id_areas, idpersonal FROM cargos WHERE id_cargos = $idcargos;";
		$res = $this->conn->ConsultaArray($sql);
        return $res;
	}

	public function NombrePersonal($idpersonal)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE id_personal = $idpersonal;";

        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

    	public function MostrarCargosAccion($idcargos)
	{

		$sql = "SELECT nombre FROM cargos WHERE id_cargos = $idcargos;";
		
		$res = $this->conn->ConsultaArray($sql);
        return $res;
	}
}

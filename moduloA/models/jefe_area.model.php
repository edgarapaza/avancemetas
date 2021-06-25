<?php
require_once "Conexion.php";

class JefeArea
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($id_personal,$id_areas)
	{

		$sql = "INSERT INTO jefe_area VALUES(null,'$id_personal','$id_areas') ;";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql= "SELECT id_jefearea,id_personal,id_areas FROM jefe_area;";
		
		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function ConsultaJefeArea()
    {
        $sql = "SELECT p.id_personal AS id_jefearea, p.nombre, p.apellidos FROM personal as p, jefe_area as j WHERE p.id_personal = j.id_personal;";

        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }


	public function CrearOficinas()
	{
		
	}
}

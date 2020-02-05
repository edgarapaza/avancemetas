<?php
require_once("Conexion.php");

class JefeArea
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_personal,$id_areas)
	{

		$sql = "INSERT INTO jefe_area VALUES(null,'$id_personal','$id_areas') ;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql= "SELECT id_jefearea,id_personal,id_areas FROM jefe_area;";
		$response = $this->conn->query($sql);

		return $response;
	}

	public function ConsultaJefeArea()
    {
        $sql = "SELECT p.id_personal AS id_jefearea, p.nombre, p.apellidos FROM personal as p, jefe_area as j WHERE p.id_personal = j.id_personal;";

        if(!$response = $this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }

        //$data = $response->fetch_array(MYSQL_ASSOC);

        return $response;


    }


	public function CrearOficinas()
	{
		
	}
}

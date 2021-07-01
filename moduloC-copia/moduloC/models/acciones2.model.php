<?php
require_once("Conexion.php");

class Acciones
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_oficinas,$id_areas,$id_cargos,$id_personal,$nomb_actividad,$unidad_medida)
	{
		$fechaActual = date('Y-m-d H:i:s');

		$sql = "INSERT INTO acciones VALUES (null,'$id_oficinas','$id_areas','$id_cargos','$id_personal','$nomb_actividad','$unidad_medida','$fechaActual','$fechaActual');";


		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		mysqli_close($this->conn);
	}

	public function Modificar($id_acciones,$nomb_actividad,$unidad_medida)
	{
		$sql = "UPDATE acciones SET nomb_actividad = '$nomb_actividad', unidad_medida = '$unidad_medida' WHERE id_acciones = $id_acciones;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();
		mysqli_close($this->conn);
	}

	public function Consultar()
	{
		$sql = "SELECT id_acciones,id_personal,id_cargos,nomb_actividad,unidad_medida FROM acciones;";
		        

		$response = $this->conn->query($sql);

		return $response;
		mysqli_close($this->conn);
	}

	public function MostrarAcciones($id_personal)
	{
		echo $id_personal;
		//Por el codigo del personal
		$sql = "SELECT id_acciones, id_personal, id_cargos, nomb_actividad, unidad_medida FROM acciones WHERE id_personal = " . $id_personal;
		
		if(!$response = $this->conn->query($sql))
		{
			"Error: ". mysqli_error($this->conn);
            exit();
		}
		
		return $response;

		mysqli_close($this->conn);
	}
	
	
}

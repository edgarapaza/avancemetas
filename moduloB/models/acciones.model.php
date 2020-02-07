<?php
require_once("Conexion.php");

class Acciones
{
	private $conn;

	function __construct()
	{
		$link = new Conexionn();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($id_personal,$id_cargos,$nomb_actividad,$unidad_medida)
	{
		$fechaActual = date('Y-m-d H:i:s');

		$sql = "INSERT INTO acciones VALUES (null,'$id_personal','$id_cargos','$nomb_actividad','$unidad_medida','$fechaActual','$fechaActual');";


		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar($id_acciones,$nomb_actividad,$unidad_medida)
	{
		$sql = "UPDATE acciones SET nomb_actividad = '$nomb_actividad', unidad_medida = '$unidad_medida' WHERE id_acciones = $id_acciones;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$this->conn->close();		
	}

	public function Consultar()
	{
		$sql = "SELECT id_acciones,id_personal,id_cargos,nomb_actividad,unidad_medida FROM acciones;";
		        

		$response = $this->conn->query($sql);

		return $response;
	}
	public function MostrarAcciones($id_acciones)
	{
		$sql = "SELECT id_acciones,id_personal,id_cargos,nomb_actividad,unidad_medida FROM acciones WHERE id_acciones = " . $id_acciones;
		
		if(!$response = $this->conn->query($sql))
		{
			"Error: ". mysqli_error($this->conn);
            exit();
		}
		$fila = $response->fetch_array(MYSQLI_ASSOC);
		return $fila;
	}

}

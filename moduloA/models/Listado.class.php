<?php
include_once "Conexion.php";

class Listado
{
	private $conn;
	
	function __construct()
	{

		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Personal(){
		$sql = "SELECT id_personal, CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal;";
		$data = $this->conn->query($sql);
		return $data;
		$this->conn->close();
	}

	public function Institucion(){
		$sql="SELECT id_institucion, nombre FROM institucion;";
		$data = $this->conn->query($sql);
		return $data;
		$this->conn->close();
	}

		public function Oficina(){
			$sql="SELECT id_oficina, oficina FROM oficinas;";
			$data = $this->conn->query($sql);
			return $data;
			$this->conn->close();
		}

		public function Cargo(){
			$sql="SELECT id_cargo, cargo FROM cargos;";
			$data = $this->conn->query($sql);
			return $data;
			$this->conn->close();
		}

		public function PersonalUnico($codigo){
			$sql = "SELECT CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal WHERE id_personal= $codigo";
			$data = $this->conn->query($sql);
			$dato = $data->fetch_array(MYSQLI_ASSOC);
			return $dato;
			$this->conn->close();
		}

		public function OficinaUnico($codigo){
			$sql="SELECT oficina FROM oficinas WHERE id_oficina= $codigo";
			$data = $this->conn->query($sql);
			$dato = $data->fetch_array(MYSQLI_ASSOC);
			return $dato;
			$this->conn->close();
		}

		public function CargoUnico($codigo){
			$sql="SELECT cargo FROM cargos WHERE id_cargo = $codigo";
			$data = $this->conn->query($sql);
			$dato = $data->fetch_array(MYSQLI_ASSOC);
			return $dato;
			$this->conn->close();
		}
}

/*
$listado = new Listado();
$datos = $listado->Cargo();
while($fila = $datos->fetch_array()){
	echo $fila[0];
	echo $fila[1];
}
*/
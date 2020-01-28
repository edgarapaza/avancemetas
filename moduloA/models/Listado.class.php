<?php

	class Listado
	{

		private $mysqli;

		function __construct()
		{

			require_once '../coreA/Conexion.php';
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		function Personal(){
			$sql = "SELECT id_personal, CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal;";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		function Institucion(){
			$sql="SELECT id_institucion, nombre FROM institucion;";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		function Oficina(){
			$sql="SELECT id_oficina, oficina FROM oficinas;";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		function Cargo(){
			$sql="SELECT id_cargo, cargo FROM cargos;";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		function PersonalUnico($codigo){
			$sql = "SELECT CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal WHERE id_personal= $codigo";
			$data = $this->mysqli->query($sql);
			$dato = $data->fetch_assoc();
			return $dato;
		}

		function OficinaUnico($codigo){
			$sql="SELECT oficina FROM oficinas WHERE id_oficina= $codigo";
			$data = $this->mysqli->query($sql);
			$dato = $data->fetch_assoc();
			return $dato;
		}

		function CargoUnico($codigo){
			$sql="SELECT cargo FROM cargos WHERE id_cargo = $codigo";
			$data = $this->mysqli->query($sql);
			$dato = $data->fetch_assoc();
			return $dato;
		}
	}

 ?>
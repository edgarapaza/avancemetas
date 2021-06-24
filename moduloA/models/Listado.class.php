<?php
require_once("Conexion.php");
	class Listado
	{

		private $conn;

		function __construct()
		{
			$this->conn = new Conexion();
			return $this->conn;
		}

		function Personal(){
			$sql = "SELECT id_personal, CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Institucion(){
			$sql="SELECT id_institucion, nombre FROM institucion;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Oficina(){
			$sql="SELECT id_oficina, oficina FROM oficinas;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Cargo(){
			$sql="SELECT id_cargo, cargo FROM cargos;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function PersonalUnico($codigo){
			$sql = "SELECT CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal WHERE id_personal= $codigo";
			$data = $this->conn->query($sql);
			$dato = $data->fetch_assoc();
			return $dato;
		}

		function OficinaUnico($codigo){
			$sql="SELECT oficina FROM oficinas WHERE id_oficina= $codigo";
			
			$res = $this->conn->ConsultaArray($sql);
        	return $res;
		}

		function CargoUnico($codigo){
			$sql="SELECT cargo FROM cargos WHERE id_cargo = $codigo";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}
	}

 ?>
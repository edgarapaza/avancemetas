<?php
require_once "Conexion.php";

class Listado
{

		private $conn;

		function __construct()
		{
			$this->conn = new Conexion();
			return $this->conn;
		}

		function Personal(){
			$sql = "SELECT id_personal, CONCAT(nombre,' ', apellidos) AS nombre FROM personal;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Institucion(){
			$sql="SELECT id,nombre_inst, direccion, telefono, RUC, email,p_web,fecha_creacion_archivo,n_resolucion FROM institucion;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Oficina(){
			$sql="SELECT id,nombre,sigla,id_metas,id_gerencia FROM oficinas;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Cargo(){
			$sql="SELECT id_cargos,nombre,id_oficina,id_areas,id_personal FROM cargos;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function PersonalUnico($codigo){
			$sql = "SELECT CONCAT(nombre,' ', apellidos) AS nombre FROM personal WHERE id_personal= $codigo";
			$res = $this->conn->ConsultaArray($sql);
        	return $res;
		}

		function OficinaUnico($codigo){
			$sql="SELECT nomsubger FROM subgerencia WHERE idsubgerencia= $codigo";
			
			$res = $this->conn->ConsultaArray($sql);
        	return $res;
		}

		function CargoUnico($codigo){
			$sql="SELECT nombre FROM cargos WHERE id_cargos = $codigo";
			
			$res = $this->conn->ConsultaArray($sql);
        	return $res;
		}
	}

 ?>
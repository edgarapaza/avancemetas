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

		function Institucion()
		{
			$sql="SELECT id,nombre_inst,direccion,telefono,RUC,email,p_web,creacion,resolucion,fecCreate,fecChange FROM institucion;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Gerencias()
		{
			$sql="SELECT idgerencia,nomgerencia,sigla,iduorg,fechaActual FROM gerencias;";	
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function SubGerencias()
		{
			$sql="SELECT idsubgerencia,nomsubger,sigla,idgerencia FROM subgerencia;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Areas()
		{
			$sql="SELECT id_areas,nombre,descripcion,idsubgerencia,id_metas FROM areas;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function Cargo()
		{
			$sql="SELECT id_cargos,nombre,id_areas,fec_creacion,idpersonal FROM cargos;";
			
			$res = $this->conn->ConsultaCon($sql);
        	return $res;
		}

		function PersonalUnico($codigo){
			$sql = "SELECT CONCAT(nombre,' ', apellidos) AS nombre FROM personal WHERE id_personal= $codigo";
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
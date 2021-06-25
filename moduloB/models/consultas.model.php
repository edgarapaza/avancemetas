<?php
require "Conexion.php";
 class Consultas
 {
 	private $conn;

 	function __construct(){
 		$this->conn = new Conexion();
 		return $this->conn;
 	}

 	function MostrarOficinas()
 	{
 		$sql="SELECT id, nombre, sigla, id_metas, id_gerencia FROM oficinas;";

 		$res=$this->conn->ConsultaCon($sql);
 		return $res;
 	}

 	function MostrarAreas()
 	{
 		$sql="SELECT id_areas,nombre,descripcion,idoficina,id_metas,f_creacion FROM areas;";
 		$res=$this->conn->ConsultaCon($sql);
 		return $res;
 	}
 	function MostrarCargos()
 	{
 		$sql="SELECT id_cargos, id_oficina, nombre, fec_creacion FROM cargos;";
 		$res=$this->conn->ConsultaCon($sql);
 		return $res;
 	}
 	function MostrarPersonal()
 	{
 		$sql="SELECT id_personal, nombre, apellidos, sexo, telefono, fecha_nac, email, DNI, foto, f_creacion FROM personal;";
 		$res=$this->conn->ConsultaCon($sql);
 		return $res;
 	}

 }
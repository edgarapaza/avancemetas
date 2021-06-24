<?php

	class Persona
	{
		private $mysqli;

		function __construct()
		{
			$this->conn = new Conexion();
			return $this->conn;
		}

		function Add($cargo,$oficina,$institucion,$nombre,$paterno,$materno,$dni,$celular,$telcasa,$email,$direccion,$barrio,$gs,$foto){
			$sql= "INSERT INTO personal VALUES(null,$cargo,$oficina,$institucion,'$nombre','$paterno','$materno','$dni','$celular','$telcasa','$email','$direccion','$barrio','$gs',null)";

			$res = $this->conn->ConsultaSin($sql);
			return $res;
		}

		function Remove($idpersonal){
			$sql= "DELETE FROM personal WHERE id_personal = $idpersonal LIMIT 1";
			
			$res = $this->conn->ConsultaSin($sql);
			return $res;
		}

		function Edit($cargo,$oficina,$institucion,$celular,$telcasa,$email,$direccion,$barrio){
			$sql= "UPDATE personal SET id_cargo = $cargo, id_oficina = $oficina, id_institucion = $institucion, celular = '{$celular}', telcasa = '{$telcasa}',email = '{$email}', direccion = '{$direccion}', barrio = '{$barrio}'";
			
			$res = $this->conn->ConsultaSin($sql);
			return $res;
		}

		function EditFoto($foto){

		}

		function MostrarTodo(){
			$sql= "SELECT * FROM personal ORDER BY paterno;";

			$res = $this->conn->ConsultaCon($sql);
			return $res;
		}

		function MostrarPersona($idpersonal){
			$sql = "SELECT CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal WHERE id_personal = $idpersonal;";
			$data1 = $this->conn->ConsultaCon($sql);
			$res = $data1->fetch_assoc();
			return $res;
		}
	}


?>
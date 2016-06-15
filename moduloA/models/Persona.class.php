<?php

/**
*
*/
	class Persona
	{
		private $mysqli;

		function __construct()
		{
			require_once "../coreB/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		function Add($cargo,$oficina,$institucion,$nombre,$paterno,$materno,$dni,$celular,$telcasa,$email,$direccion,$barrio,$gs,$foto){
			$sql= "INSERT INTO personal VALUES(null,$cargo,$oficina,$institucion,'$nombre','$paterno','$materno','$dni','$celular','$telcasa','$email','$direccion','$barrio','$gs',null)";
			$this->mysqli->query($sql);
		}

		function Remove($idpersonal){
			$sql= "DELETE FROM personal WHERE id_personal = $idpersonal LIMIT 1";
			$this->mysqli->query($sql);
		}

		function Edit($cargo,$oficina,$institucion,$celular,$telcasa,$email,$direccion,$barrio){
			$sql= "UPDATE personal SET id_cargo = $cargo, id_oficina = $oficina, id_institucion = $institucion, celular = '{$celular}', telcasa = '{$telcasa}',email = '{$email}', direccion = '{$direccion}', barrio = '{$barrio}'";
			$this->mysqli->query($sql);
		}

		function EditFoto($foto){

		}

		function MostrarTodo(){
			$sql= "SELECT * FROM personal ORDER BY paterno;";
			$datos = $this->mysqli->query($sql);

			return $datos;
		}

		function MostrarPersona($idpersonal){
			$sql = "SELECT CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal WHERE id_personal = $idpersonal;";
			$data1 = $this->mysqli->query($sql);
			$data = $data1->fetch_assoc();
			return $data;
		}
	}

?>
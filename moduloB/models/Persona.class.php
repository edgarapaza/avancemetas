<?php
include_once "Conexion.php";

class Persona
{
	
		private $conn;

		public function __construct()
		{
			
			$link = new Conexion();
			$this->conn = $link->Conectar();			
			return $this->conn;
		}

		public function Add($cargo,$oficina,$institucion,$nombre,$paterno,$materno,$dni,$celular,$telcasa,$email,$direccion,$barrio,$gs,$foto){
			$sql= "INSERT INTO personal VALUES(null,$cargo,$oficina,$institucion,'$nombre','$paterno','$materno','$dni','$celular','$telcasa','$email','$direccion','$barrio','$gs',null)";
			$this->conn->query($sql);
			$this->conn->close();
		}

		public function Remove($idpersonal){
			$sql= "DELETE FROM personal WHERE id_personal = $idpersonal LIMIT 1";
			$this->conn->query($sql);
			$this->conn->close();
		}

		public function Edit($cargo,$oficina,$institucion,$celular,$telcasa,$email,$direccion,$barrio){
			$sql= "UPDATE personal SET id_cargo = $cargo, id_oficina = $oficina, id_institucion = $institucion, celular = '{$celular}', telcasa = '{$telcasa}',email = '{$email}', direccion = '{$direccion}', barrio = '{$barrio}'";
			$this->conn->query($sql);
			$this->conn->close();
		}

		public function EditFoto($foto){

		}

		public function MostrarTodo(){
			$sql= "SELECT * FROM personal ORDER BY paterno;";
			$datos = $this->conn->query($sql);

			return $datos;
			$this->conn->close();
		}

		public function MostrarPersona($idpersonal){
			$sql = "SELECT CONCAT(nombre,' ', paterno,' ',materno) AS personal FROM personal WHERE id_personal = $idpersonal;";
			$data1 = $this->conn->query($sql);
			$data = $data1->fetch_array(MYSQLI_ASSOC);
			return $data;
		}
}

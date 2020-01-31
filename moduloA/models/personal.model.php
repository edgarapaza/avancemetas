<?php
require_once("Conexion.php");

class Personal
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto, $DNI )
	{
		$fechaActual = date('Y-m-d H:i:s');
		$foto="./imagenes/usuario.png";

		$sql = "INSERT INTO personal(id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,estado,DNI,f_creacion)VALUES (null ,'$nombre','$apellidos','$sexo','$telefono','$fecha_nac','$email','$foto','1','$DNI','$fechaActual');";
	

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		
	}

	public function Modificar()
	{
		$sql = "UPDATE personal SET nombre = nombre, apellidos = apellidos, sexo = sexo, telefono = telefono, fecha_nac = fecha_nac, email = mail, foto = foto, id_area = id_area, f_creacion = f_creacion, f_update = f_update, id_oficinas = id_oficinas, DNI = DNI WHERE id_personal =id_personal;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,id_area,f_creacion,id_oficinas, DNI FROM personal";
		//$sql ="SELECT * FROM personal";

		if(!$response = $this->conn->query($sql)){
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}

		return $response;
	

	}

	public function MostrarPersonalUno($idpersonal)
	{
				
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,id_area,f_creacion,id_oficinas,DNI FROM personal WHERE id_personal = " . $idpersonal;


		if(!$response = $this->conn->query($sql)){
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}

		$dato = $response->fetch_array(MYSQLI_ASSOC);

		return $dato;

	}
}

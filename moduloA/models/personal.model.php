<?php
require_once("Conexion.php");

class Personal
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto, $dni )
	{
		$fechaActual = date('Y-m-d H:i:s');
		$foto="./imagenes/usuario.png";

		$sql = "INSERT INTO personal(id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,DNI,f_creacion)VALUES (null ,'$nombre','$apellidos','$sexo','$telefono','$fecha_nac','$email','$foto','$dni','$fechaActual');";
	

		$res = $this->conn->ConsultaSin($sql);
        return $res;
		
	}

	public function Modificar($id_personal, $nombre,$apellidos,$telefono,$fecha_nac,$email,$dni)
	{
		$sql = "UPDATE personal SET nombre ='$nombre', apellidos = '$apellidos', telefono ='$telefono', fecha_nac = '$fecha_nac', email = '$email', DNI = '$dni' WHERE id_personal = $id_personal;";

		$res = $this->conn->ConsultaSin($sql);
        return $res;		
	}

	public function Consultar()
	{
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,f_creacion, DNI FROM personal";
		
		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function MostrarPersonalUno($idpersonal)
	{
				
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,f_creacion,DNI FROM personal WHERE id_personal = " . $idpersonal;


		$res = $this->conn->ConsultaArray($sql);
        return $res;

	}
	public function MostrarPersonalAccion($idpersonal)
	{

		$sql = "SELECT nombre, apellidos FROM personal WHERE id_personal = $idpersonal;";
		
		$res = $this->conn->ConsultaArray($sql);
        return $res;
	}

}

<?php
require_once "Conexion.php";

class Institucion
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	public function Guardar($nombre_inst,$direccion,$telefono,$RUC,$email,$p_web,$fecha_creacion,$resolucion)
	{
		$fechaActual = date('Y-m-d H:i:s');

		//$SQL2 = "CALL CalculoPorMes($mes, $anio);"

		$sql = "INSERT INTO institucion (id,nombre_inst,direccion,telefono,RUC,email,p_web,creacion,resolucion,fecCreate,fecChange) VALUES (null,'$nombre_inst','$direccion','$telefono','$RUC','$email','$p_web','$fecha_creacion','$resolucion','$fechaActual','$fechaActual'>);";

		$res = $this->conn->ConsultaSin($sql);
		return $res;
	}


	public function Consultar()
	{
		$sql = "SELECT id,nombre_inst,direccion,telefono,RUC,email,p_web,creacion,resolucion,fecCreate,fecChange FROM institucion;";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

	public function ConsultaGerencias()
	{
		$sql = "SELECT idgerencia,nomgerencia,sigla,idinstitucion FROM gerencias";

		$res = $this->conn->ConsultaCon($sql);
        return $res;
	}

}


#$institucion = new Institucion();
/*$fila = $datos = $institucion->Consultar();
while ($fila = $datos->fetch_array(MYSQLI_ASSOC)){
	echo $fila['nombre_inst'];
}*/
<?php
require_once "Conexion.php";

class Login
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function NombrePersonal($idpersonal)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE id_personal = $idpersonal;";

        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

    public function ultimoRegistro()
    {
        $sql = "SELECT count(*) as ultimo FROM login;";

        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

    public function RegistraAcceso($codigoPersonal, $idpersonal, $username,$password,$nivel)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO login VALUES ('$codigoPersonal','$idpersonal','$username','$password','$nivel','1');";

        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
}

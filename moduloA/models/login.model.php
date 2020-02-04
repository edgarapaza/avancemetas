<?php
require_once("Conexion.php");

class Login
{
    private $conn;

    function __construct()
    {
        $link = new Conexion();
        $this->conn = $link->Conectar();
        return $this->conn;
    }

    public function NombrePersonal($idpersonal)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE id_personal = $idpersonal;";

        if(!$res = $this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }
        $data = $res->fetch_array(MYSQLI_ASSOC);
        return $data;
    }
}

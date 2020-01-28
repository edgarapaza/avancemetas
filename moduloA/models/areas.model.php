<?php
require_once("Conexion.php");

class Areas
{
    private $conn;

    function __construct()
    {
        $link = new Conexion();
        $this->conn = $link->Conectar();
        return $this->conn;
    }

    public function Guardar($nombre,$id_metas,$descripcion)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO areas VALUES (null,'$nombre','$id_metas','$descripcion','$fechaActual','$fechaActual');";

        if(!$this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }
        return true;
    }

    public function Modificar()
    {
        
    }

    public function Consultar()
    {

        $sql = "SELECT id_areas, nombre, id_metas, descripcion,f_creacion,f_update from areas;";
        $response = $this->conn->query($sql);

        return $response;

    }

    public function CrearOficinas()
    {
        
    }
}

/*
$areas = new Areas();

$data = $areas->Consultar();

while ($fila = $data->fetch_array()) {
	echo $fila[0];
	echo $fila[1];
	echo $fila[2];
}*/
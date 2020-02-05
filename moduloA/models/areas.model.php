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
        
        if(!$response = $this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }

        return $response;

    }

    public function MostrarArea($idarea)
    {

        $sql = "SELECT id_areas, nombre, id_metas, descripcion,f_creacion,f_update from areas WHERE id_areas = $idarea;";
        
        if(!$response = $this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }

        $data = $response->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    
    public function CrearOficinas()
    {
        
    }
}

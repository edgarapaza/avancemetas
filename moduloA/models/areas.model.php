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

    public function Guardar($nombre, $descripcion, $idoficina, $id_metas)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO areas VALUES (null,'$nombre','$descripcion','$idoficina','$id_metas','$fechaActual',null);
";

        if(!$this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }
        
    }

    public function Modificar($id_areas, $nombre,$descripcion)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql= "UPDATE areas SET nombre='$nombre', descripcion ='$descripcion' WHERE id_areas= $id_areas;";

        if(!$this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }

        $this->conn->close();
    }

    public function Consultar()   
    {
                        
        $sql = "SELECT id_areas, nombre, descripcion, idoficina, id_metas FROM areas;";
        
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

    public function DatosDireccionOficina($idoficina)
    {
        $sql = "SELECT nombre_of, sigla, id_metas, id_institucion FROM oficinas WHERE id = $idoficina;";

        if(!$response = $this->conn->query($sql)){
            echo "Error: ". mysqli_error($this->conn);
            exit();
        }

        $dato = $response->fetch_array(MYSQLI_ASSOC);

        return $dato;        
    }

}

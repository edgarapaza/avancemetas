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

    public function Modificar($id_areas, $nombre,$idoficina,$descripcion)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql= "UPDATE areas SET nombre='$nombre', idoficina ='$idoficina', descripcion ='$descripcion' f_update='$fechaActual' WHERE id_areas= $id_areas;";

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
    
    public function MostrarAreas($idareas)
    {
                
        $sql = "SELECT nombre, descripcion, idoficina, id_metas FROM areas WHERE id_areas = " . $idareas;


        if(!$response = $this->conn->query($sql)){
            echo "Error: ". mysqli_error($this->conn);
            exit();
        }

        $dato = $response->fetch_array(MYSQLI_ASSOC);

        return $dato;

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

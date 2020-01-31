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

    public function Modificar($id_areas, $nombre,$id_metas,$descripcion)
    {
        $fechaActual = date('Y-m-d H:i:s');

       $sql= "UPDATE areas SET nombre='$nombre', id_metas ='$id_metas', descripcion ='$descripcion',  f_update='$fechaActual' WHERE id_areas='$id_areas';";

       if(!$this->conn->query($sql)){
            echo "Error: " . mysqli_error($this->conn);
            exit();
        }

        $this->conn->close();

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
    
    public function MostrarAreas($idareas)
    {
                
        $sql = "SELECT nombre, id_metas, descripcion,f_creacion,f_update FROM areas WHERE id_areas = " . $idareas;


        if(!$response = $this->conn->query($sql)){
            echo "Error: ". mysqli_error($this->conn);
            exit();
        }

        $dato = $response->fetch_array(MYSQLI_ASSOC);

        return $dato;

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
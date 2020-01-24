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
class Areas
{
	private $nombre;
	private $idmetas;
	private $descripcion;
	private $conn;

	function __construct()
	{
		$erika = new Conexion();
		$this->conn = $erika->Conectar();
		return $this->conn;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT * FROM areas";
		$datos = $this->conn->query($sql);
		
		return $datos;	
	}

	public function CrearCargos()
	{
		
	}

    /**
     * @return mixed
     */
    /*public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    /*public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    /*public function getIdmetas()
    {
        return $this->idmetas;
    }

    /**
     * @param mixed $idmetas
     *
     * @return self
     */
    /*public function setIdmetas($idmetas)
    {
        $this->idmetas = $idmetas;

        return $this;
    }

    /**
     * @return mixed
     */
    /*public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     *
     * @return self
     */
    /*public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}

$areas = new Areas();

$data = $areas->Consultar();

while ($fila = $data->fetch_array()) {
	echo $fila[0];
	echo $fila[1];
	echo $fila[2];
}*/
<?php
include "Conexion.php";

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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdmetas()
    {
        return $this->idmetas;
    }

    /**
     * @param mixed $idmetas
     *
     * @return self
     */
    public function setIdmetas($idmetas)
    {
        $this->idmetas = $idmetas;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
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
}
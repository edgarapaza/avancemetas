<?php
require_once "Conexion.php";

class Areas
{
    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function Guardar($nombre, $descripcion, $idsubgerencia, $id_metas)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql = "INSERT INTO areas VALUES (null,'$nombre','$descripcion','$idsubgerencia','$id_metas','$fechaActual',null);
";

        $res = $this->conn->ConsultaCon($sql);
        return $res;
        
    }

    public function Modificar($id_areas, $nombre,$descripcion)
    {
        $fechaActual = date('Y-m-d H:i:s');

        $sql= "UPDATE areas SET nombre='$nombre', descripcion ='$descripcion' WHERE id_areas= $id_areas;";

        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    public function Consultar()   
    {    
        $sql = "SELECT id_areas,nombre,descripcion,idsubgerencia,id_metas FROM areas";
        
        $res = $this->conn->ConsultaCon($sql);
        return $res;

    }

    public function MostrarArea($idarea)
    {

        $sql = "SELECT id_areas, nombre, id_metas, descripcion from areas WHERE id_areas = $idarea;";
        
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    public function DatosDireccionOficina($idsubgerencia)
    {
        $sql = "SELECT idsubgerencia, nomsubger, sigla, idgerencia FROM subgerencia WHERE idsubgerencia=".$idsubgerencia;
        //SELECT idgerencia, nomgerencia, sigla, iduorg FROM gerencias;
        
        $res = $this->conn->ConsultaArray($sql);
        return $res;
    }

}

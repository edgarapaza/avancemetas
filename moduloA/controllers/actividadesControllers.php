<?php

	class Tareas
	{
		private $act;

		function __construct(){
			require_once "../models/Actividades.class.php";
			$this->act = new Actividades();

		}

		function listado($idpersonal){
			$data = $this->act->MostrarTareas($idpersonal);
			return $data;
		}

		function AsignarTareas(){
			$id_personal = $_REQUEST['id_personal'];
			$id_institucion = $_REQUEST['id_institucion'];
			$id_oficina = $_REQUEST['id_oficina'];
			$id_cargo = $_REQUEST['id_cargo'];
			$actividad = $_REQUEST['actividad'];
			$unidadMedida = $_REQUEST['unidadMedida'];
			$obs = $_REQUEST['obs'];

			$this->act->CrearTarea($id_personal,$id_institucion,$id_oficina,$id_cargo,$actividad,$unidadMedida,$obs);

			header("Location: asignarTareas.php?mensaje=Dato Guardado");
		}

	}

	if (isset($_REQUEST['btnFormulario'])) {
		$tareas = new Tareas();
		$tareas->AsignarTareas();
	}
?>

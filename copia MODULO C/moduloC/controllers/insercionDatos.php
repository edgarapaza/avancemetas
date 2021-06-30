<?php


	class InsercionDatos
	{
		private $idpersonal;
		private $idactividad;
		private $reporte1;
		private $estado;
		private $obs;
		private $reporte;

		function __construct(){
			session_start();

			include_once "../models/reporte.class.php";
			$this->reporte = new Reporte();

			$this->idpersonal = $_REQUEST['idpersonal'];
			$this->idactividad = $_REQUEST['idactividad'];
			$this->reporte1 = $_REQUEST['reporte'];
			$this->estado = 1;
			$this->obs = $_REQUEST['obs'];

			echo "<br>".$this->idpersonal;
			echo "<br>".$this->idactividad;
			echo "<br>".$this->reporte1;
			echo "<br>".$this->estado;
			echo "<br>".$this->obs;

			$this::Validar();
		}




		public function Validar(){

			$data = $this->reporte->Duplicado($this->idpersonal, $this->idactividad);

			if($data[0] == 0){
				// No ha registrado todavia
				$this::Insertar();
			}else{
				// Ya lo ha registrado
				header("Location: ../views/mensaje.php?mensaje=Ud. ya ha Registrado esta informacion.");

			}
		}

		public function Insertar(){

			if($this->reporte1 == NULL){
				//header("Location: ../views/mensaje.php?mensaje=Error Guardando");
			}else{

				$this->reporte->Insertar($this->idpersonal, $this->idactividad, $this->reporte1, $this->estado, $this->obs);
				header("Location: ../views/mensaje.php?mensaje=Datos Guardados Existosamente!.");
			}
		}
	}

	$insert = new InsercionDatos();


 ?>
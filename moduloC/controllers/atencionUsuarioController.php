<?php

	class RegistroUsuario
	{

		private $link;

		function __construct()
		{
			require_once "../models/AtencionUsuarios.php";
			$this->link = new AtencionUsuario();
			return $this->link;
		}

		public function Validar($dato1, $dato2, $dato3)
		{
			$dni = trim(ucwords($dato1));
			$nombre = trim(ucwords($dato2));
			$tipoAtencion = trim(ucwords($dato3));

			$data = $this->link->Duplicado($dni);

			if($data[0] == 0){
				$this::Add($dni, $nombre, $tipoAtencion);
			}else{
				$datos = $data;
			}

			return $datos;
		}

		public function Add($dni, $nombre, $tipoAtencion)
		{
			$this->link->Add($dni, $nombre, $tipoAtencion);
		}
	}


 ?>
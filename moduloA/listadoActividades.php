<?php
include "header.php";
	
		require "./models/Actividades.class.php";
		$actividades = new Actividades();
		$data = $actividades->ListarTodo();
		
	
#idActividad,id_personal,id_institucion,id_oficina,id_cargo,actividad,unidadMedida,obs 
	require "./models/listado.model.php";
	$listado = new Listado();

 ?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <h1 class="h3 mb-4 text-gray-800">Listado de Actividad / Acciones</h1>
          <table class="table table-striped table-hover">
				<thead>
					<tr class="info">
						<th>Personal</th>
						<th>Oficina</th>
						<th>Cargo</th>
						<th>Actividad</th>
						<th>Unid. Medida</th>
						<th>Observaciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
					
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {

					?>
					<tr>
						<td><?php
							$per = $listado->PersonalUnico($fila['id_personal']);
							echo $per['nombre'];
						?></td>
						<td><?php

							$ofi = $listado->OficinaUnico($fila['id_oficina']);
							echo $ofi['nombre'];
							?></td>
						<td><?php

							$car = $listado->CargoUnico($fila['id_cargo']);
							echo $car['nombre'];
							?></td>
						<td><?php echo $fila['actividad']; ?></td>
						<td><?php echo $fila['unidadMedida']; ?></td>
						<td><?php echo $fila['obs']; ?></td>
					</tr>
					<?php
						}
					 ?>

				</tbody>
			</table>
        </div>
      </div>
    </div>
  </div>
			
<?php include "footer.php"; ?>
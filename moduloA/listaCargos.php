<?php
include "header.php";
include("./models/cargos.model.php");
include("./models/oficinas.model.php");

$cargos = new Cargo();
$data = $cargos->Consultar();
$oficinas = new Oficinas();

$i = 1;

?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <h1 class="h3 mb-4 text-gray-800">Lista de Cargos</h1>
          <table class="table">
				<thead>
					<tr>
						<th>Num.</th>
						<th>Nombre Cargo</th>
						<th>Oficina / Direccion</th>
						<th>Area</th>
						<th>Personal</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
				<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
					
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php //echo $fila['id'];
						          echo $fila['nombre']; ?>
						          	
						</td>
						<td>
							<?php 
							 $office = $oficinas->MostrarOficina($fila['id_oficina']);
							 echo $office['nombre'];

							?>
						</td>
						<td>
							<?php 
							 echo $fila['id_areas'];
							 
							?>
						</td>

						<td>
							<?php 
							 echo $fila['id_personal'];
							?>
						</td>

						<td>
							
							 <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiaCargos(<?php echo $fila['id_cargos'];?>)"><i class="material-icons">how_to_reg</i></a>
							 
						</td>
					</tr>
				<?php
					$i++;
				}
				?>
				</tbody>
			</table>
        </div>
      </div>
    </div>
  </div>
			



<script>
	function CambiaCargos(dato) {
		var ventana1 = window.open('updateCargos.php?idcargos='+dato,"", "width=600,height=500");
	}
</script>

<?php include "footer.php"; ?>
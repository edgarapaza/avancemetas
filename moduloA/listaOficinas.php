<?php
include "header.php";
include("./models/oficinas.model.php");
include("./models/metas.model.php");

$oficinas = new Oficinas();
$metas = new Metas();
$data = $oficinas->Consultar();
$office = $oficinas->Consultar();

$i = 1;

?>

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
          <h1 class="h3 mb-4 text-gray-800">Listado de Sub Gerencias Creadas</h1>
          
			<table class="table">
				<thead>
					<tr>
						<th>Num.</th>
						<th>Nombre Oficina</th>
						<th>Id meta</th>
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
							 
							$datameta = $metas->MostrarMetaOficina($fila['id_metas']);
							printf("Meta: %s - Programado (%s)",$datameta['nombre'], $datameta['programado']); 
							?>
							
						</td>
						<td>
							
							 <a href="#" id="#cambiarOficina" class="btn btn-info btn-sm" onclick="CambiarDatosOficina(<?php echo $fila['id'];?>)">Cambiar</a>
							 

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

<div id="caja">
	<div class="container section">
		

		
	</div>
</div>

<script>
	function CambiarDatosOficina(dato) {
		var ventana1 = window.open('oficinasCambiar.php?idoficina='+dato,"MsgWindow", "width=600,height=500");
	}
</script>

<?php include "footer.php"; ?>
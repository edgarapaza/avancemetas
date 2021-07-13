<?php include("../moduloA/models/personal.model.php");
$i = 1;
$personal = new Personal();
$data = $personal->Consultar();
?>
<div class="col-xs-12 col-sm-9 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> MODULO DE ADMINISTRADOR DEL SISTEMA</h3>
		</div>
		<div class="panel-body">
			<div class="content-row">
				<h2 class="content-row-title">Titulo</h2>
				<h2>Lista del Personal del Archivo Regional</h2>
				<table class="table">
					
					<thead>
						<tr>
							<th>Num.</th>
							<th>Nombres y Apellidos</th>
							<th>Telefono</th>
							<th>Email</th>
							<th>Foto</th>
							<th>DNI</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
						
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $fila['nombre']." ". $fila['apellidos']; ?></td>
							<td><?php echo $fila['telefono']; ?></td>
							<td><?php echo $fila['email']; ?></td>
							<td>
								<img src="<?php echo $fila['foto']; ?>" alt="Foto" class="responsive" width="40" />
							</td>
							<td><?php echo $fila['DNI']; ?></td>
							<td>
								<a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosAreas(<?php echo $fila['id_personal'];?>)"><i class="material-icons">how_to_reg</i></a>
								<a href="#" id="#" class="btn btn-success btn-sm" onclick="AsignarPassword(<?php echo $fila['id_personal'];?>)"><i class="material-icons">security</i></a>
								
							</td>
						</tr>
						<?php
						$i=$i+1;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	function CambiarDatosAreas(dato) {
		window.open('updatePersonal.php?idpersonal='+dato,"", "width=700,height=800");
	}
	function AsignarPassword(dato) {
		window.open('login.php?idpersonal='+dato,"", "width=700,height=800");
	}
</script>
<?php include("../moduloA/models/personal.model.php");
$i = 1;
$personal = new Personal();
$data = $personal->Consultar();

?>
<link rel="stylesheet" type="text/css" href="assets/css/material-dashboard.css">

<div class="container">
	
	<h2>Lista del Personal del Archivo Regional</h2>
	<table class="table">
		<caption>table title and/or explanatory text</caption>
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
				echo $fila['foto'];
			?>

			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $fila['nombre']." ". $fila['apellidos']; ?></td>
				<td><?php echo $fila['telefono']; ?></td>
				<td><?php echo $fila['email']; ?></td>
				<td>
					<img src="<?php echo $fila['foto']; ?>" alt="afasdfasdfasd" />
				</td>
				<td><?php echo $fila['DNI']; ?></td>
				<td>
					<a href="updatePersonal.php?idpersonal=<?php echo $fila['id_personal']; ?>">Modificar</a>
				</td>
			</tr>
		<?php 
		$i=$i+1;
		} ?>
		</tbody>
	</table>
</div>
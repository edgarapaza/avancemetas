<?php
include "header.php";
require "models/consultas.model.php";

$consultas = new Consultas();
$data = $consultas->Gerencias();

?>

 <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">

          <!-- PAGE CUERPO -->
			<center><h1>Crear una nueva Sub Gerencia</h1></center>
			<form action="controllers/oficinas.controller.php" method="POST" role="form">
				
				<div class="form-group">
					<label for="">¿A que Gerencia partenece?:</label>
					<select name="idgerencia" id="" class="form-control" required>
				     	<option value="0" selected="selected">[Seleccione una Gerencia]</option>
						<?php
						while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 
						?>
						 <option value="<?php echo $fila['idgerencia']; ?>"><?php echo $fila['nomgerencia'];?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="">Nombre Sub Gerencia:</label>
					<input type="text" class="form-control" id="nomsubgerencia" name="nomsubgerencia" placeholder="" required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Sigla:</label>
					<input type="text" class="form-control" id="" name="sigla" placeholder="" required autocomplete="off">
				</div>
						
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
        </div>
      </div>
    </div>
  </div>

	

<?php include "footer.php"; ?>
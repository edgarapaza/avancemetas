


<?php while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {  
				
				?>
				<tr>
					
					<td>
						<?php echo $i;
						 ?>
						<input type="hidden" name="idpersonal" id="idpersonal" value="<?php echo $idpersonal;?>">
						<input type="hidden" name="idacciones" id="idacciones" value="<?php echo $fila['id_acciones'];?>">
					</td>
					<td>
						<?php 
						 echo $fila['nomb_actividad'];
						?>
					</td>
					<td>
                        <input type="number" name="cantidad" id="cantidad<?php echo $fila['id_acciones'];?>" required="required" class="form-control">
						
					</td>
					<td>

						<button id="btn<?php echo $fila['id_acciones'];?>" onclick="GuardarDatos(<?php echo $fila['id_acciones'];?>, <?php echo $idpersonal;?> );"  class="btn btn-primary"  type="button">Guardar</button>
							
						<!-- <a href="#" id="#" class="btn btn-info btn-sm" onclick="CambiarDatosReportes(<?php// echo $fila['id_reportes'];?>)"><i class="material-icons">how_to_reg</i></a>-->
					</td>
				</tr>
			<?php
				$i++;
			}
			?>
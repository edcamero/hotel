

<br>

	<div class="table ">
	<table class=" table table-hover table-bordered table-striped table-condensed" >
		   
	<thead> <tr class="text-center">
		
			<td scope="col">Id</td>
			<td scope="col">Tipo Habitacion</td>
			<td scope="col">Precio</td>
			<td scope="col">Acciones</td>
			
			</tr>
	</thead>

		<?php 
		$lista=Tipo_habitacion::listar();


		foreach ($lista as &$tipo) {
			echo $tipo->id;
			echo "<tr>";
			
			
			echo "<td id=$tipo->id>$tipo->id</td>";
			echo "<td>$tipo->nombre_tipo </td>";
			echo "<td>$tipo->precio </td>";
			?>
			
			<td class="text-center">
			<div class='btn-group'>
			
			
			<button id="id" name="see-language"type="button" class="btn btn-primary">
			<a href=<?php echo URL_PATH."admin/index.php?controller=tipohabitacion&action=ver&id=".$tipo->id;?>>	
						Ver
						</a>
			</button>
			<button id="see-language" name="see-language"type="button" class="btn btn-success"
						>
						editar
			</button>
			
			<button id="see-language" name="see-language"type="button" class="btn btn-danger"
						data-toggle="modal" 
						data-target="#myModal">
						eliminar
			</button>
			<?php		echo "</div></td>";
			echo "</tr>";
			
		}
		
		?>
		
	

	</table>
	</div>
	

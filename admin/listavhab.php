<!DOCTYPE html>
<html>
<head>
	<title>LISTAR HABITACION</title>
</head>


<br>
<div>
    

<div class="table table-responsive">
	<table class=" table table-hover table-bordered table-striped table-condensed" >
        <tr class="table-info">
			<td>Id</td>
			<td>NOMBRE TIPO</td>
		
			<td>PRECIO</td>
			
		</tr>

		<?php 
        $conexion=new mysqli("localhost","root","","nnn");
		$sql="SELECT * from tipo_habitacion";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre_tipo'] ?></td>
			
			<td><?php echo $mostrar['precio'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>




</body>
</html>
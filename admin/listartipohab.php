<?php 

	$conexion=mysqli_connect('localhost','root','','nnn');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>LISTAR HABITACION</title>
	 <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>

<br>

	<div class="table table-responsive">
	<table class=" table table-hover table-bordered table-striped table-condensed" >
		    <tr>
		
			<td>Id</td>
			<td>Tipo Habitacion</td>
			
			
		</tr>

		<?php 
		$sql="SELECT * from tipo_habitacion";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre_tipo'] ?></td>
			
			
		</tr>
	<?php 
	}
	 ?>
	</table>>
	</div>
	

</body>
</html>
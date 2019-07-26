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
			<td>Usuario</td>
		
			<td>Rol</td>
			
		</tr>

		<?php 
        $conexion=new mysqli("localhost","root","","nnn");
		$sql="SELECT * from usuario";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre_user'] ?></td>
			
			<td><?php echo $mostrar['rol'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>




</body>
</html>
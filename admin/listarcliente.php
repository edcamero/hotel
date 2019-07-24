<?php 

	$conexion=mysqli_connect('localhost','root','','nnn');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>LISTAR HABITACION</title>
	    <link href="css/bootstrap.css" rel="stylesheet" />
   
      <link href="css/font-awesome.css" rel="stylesheet" />
     <link href="css/style.css" rel="stylesheet" />
  
    <link href="css/admin-styles.css" rel="stylesheet" />
</head>
<body>

<br>

	<table border="2" >
		<tr>
			<td>Id</td>
			<td>Tipo Habitacion</td>
			<td>Precio</td>
			
		</tr>

		<?php 
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

</body>
</html>
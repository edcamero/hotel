<?php
session_start();
include ('../includes/conexion.php');
$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
$conectar = Conectarse();
$consulta = "SELECT id , nombre_user FROM  usuario WHERE user='$nombre_user' and pass='$password'";
$resultado = mysqli_query( $conectar,$consulta);
if (mysqli_num_rows($resultado)) {
	$array = mysqli_fetch_array($resultado);
	$_SESSION['id_admin'] = $array['id_user'];
	$_SESSION['nombre_admin'] = $array['nombre'];
	header("Location:inicio.php");

} else {

	header("Location:index.php");
	$_SESSION[id] = -1;
}
?>
<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();
}
?>


<?php
	require_once './../conexiones/conexion.php';
	
	$id = $_GET['id'];
	
	$borrar_query = "DELETE FROM users WHERE id =".$id;
	
	$conexion->query($borrar_query);
	
	header("Location: usuarios.php");

?>
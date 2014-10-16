<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();
}
?>


<?php

	require_once './../conexiones/conexion.php';
	
	$registro_query = "INSERT INTO users(user,pass,mail) VALUES(
	'".$_POST['user']."',
	'".md5($_POST['pass'])."',
	'".$_POST['mails']."'
	)";
	
	$registro_object = $conexion->query($registro_query);
	
	echo "usuario registrado";
	
	header("Location ./../index.php");

?>
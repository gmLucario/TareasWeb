<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();

	}
	//para terminar sesion ->> session_destroy()

require_once './../conexiones/conexion.php'; //Linea para llamar a connectdsfs

	$newpass = $_POST['pass'];		//Para la nueva contraseña
	$pass = $_POST['current'];  	//Para validar que es su cuentadsfsd

	$consulta = "SELECT * FROM users WHERE users='".$_SESSION['user']."' AND pass='".$pass."'";  //Usamos el nombre de usuario de la seción

	$otraConsulta = "UPDATE users SET pass='".$newpass."' WHERE user='".$_SESSION['user']."'"; 	//Consulta para cambiar la contraseña

	if (mysqli_fetch_assoc($conexion->query($consulta))) {
		//$_SESSION['usuario'] = $user;
		//echo "Hola ".$user;

		$conexion->query($otraConsulta);

		header("Location: inok.php");
	}else{

		header("Location: setaccount.php"); //redirigue a esta otra pag si nosdfsf
	}

?>

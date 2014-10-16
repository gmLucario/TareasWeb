<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();

	}
	//para terminar sesion ->> session_destroy()
?>


<?php
	require_once './../conexiones/conexion.php';
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$login_query = "SELECT * FROM users WHERE user = '"$user."' AND pass = '".md5($pass)."'";
	
	if(mysqli_fetch_assoc($conexion->query($login_query))){
	
	//variables de sesion guarda tu info de tu sesion se crea al momento, no estan predefinidas
	$_SESSION['user'] = $user;
	echo "hola ".$user;
	
	}



?>
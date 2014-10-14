<?php
$nombre='lucario';
$email='gmlucario@hotmail.com';
$password='123';

if(isset($_POST["userName"]) && $_POST["userName"]!=""){
	if($_POST["userName"]==$nombre && $_POST["email"]=$email && ($_POST[password]=$password))
			header("Location:bienvenido.php");
		else{header("Location:index/contact.html");}
}else{
	header("Location:index/contact.html");
}


?>

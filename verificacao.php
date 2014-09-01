<?php 
	session_start();
	//Conectar com o banco
	$con = new mysqli('localhost', 'root', '123','monitoramento');

	$login = $_POST["login"];
 	$senha = $_POST["password"];
	
	$sql = "SELECT senha, login FROM usuarios"; 

	
	$resultado = $con -> query($sql);

	while ($busca = $resultado->fetch_object()) {
		if ($busca->login == $_POST["login"] && $busca->senha == $_POST["password"]) {
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header("Location:app1.php");
			die();
		}
	}
	header("Location:login.html");	
 ?>
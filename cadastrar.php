<?php
	if ((!isset($_POST['firstname'])) && (!isset($_POST['lastname'])) && (!isset($_POST['login'])) && (!isset($_POST['Password'])) && (!isset($_POST['Email'])) && (isset($_POST['dnascimento']))) {
	  	header("Location:cadastro.php");
	 }  

	$cod = '';  
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$login = $_POST['login'];
	$senha = $_POST['Password'];
	$email = $_POST['Email'];
	$dnascimento = $_POST['dnascimento'];

	/*echo "$firstname<br>";
	echo "$lastname<br>";
	echo "login<br>";
	echo "email<br>";
	echo "dnascimento<br>";*/
	  
	$con = new mysqli("localhost","root","123","monitoramento");

	if(!$con){
	 echo "Erro: ".mysqli_connect_error();
	}

	$sql = "INSERT INTO usuarios VALUES (\"$cod\",\"$firstname\",\"$lastname\",\"$login\",\"$senha\", \"$email\",\"$dnascimento\")";
	if($result = $con->query($sql)){
		echo "Usuario cadastrado!";
	}
	//$result->close();
	$con->close();
	header("Location:cadastro.php");
?> 
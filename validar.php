<?php

	$login = $_POST["login"];
	$senha = $_POST["senha"];

	if($login =="lorenzo" and $senha=="1q2w3e4r"){
		echo "Login Realizado";
		#header("location: index.php");
	} else{
		echo"Login e/ou Senha incorretos";
	}
?>
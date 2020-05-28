<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "diariobordo";
	
	$conexao = mysqli_connect($host, $user, $pass, $banco)
				or die("Problemas com a conexao do banco de dados");
?>
<html>
	<head>
		<title> Cadastro </title>
	</head>
	<body>
<?php
include_once('conexao.php');
echo"<h2><center>CADASTRO DE NOME E EMAIL</center></h2>";
//recuperando dados que vem da ágina via post
$nome = $_POST['nome'];
$email = $_POST['email'];

//criado a linha de INSERT

$sqlinsert = "insert into cadastro_nome (nome, email) values ('$nome', '$email')";

//executando instrução SQL
$resultado = @mysqli_query($conexao, $sqlinsert);

if (!$resultado)
{
	die ('Query Inválido:' . @mysqli_error($conexao));
}

else
{
	echo"<center><font size = '5'>Dado inserido com sucesso!</font><br>";
	echo"<a href = 'nome.html'><font color = '#000000'>Voltar</a>";
mysqli_close($conexao);
}
?>

	</body>
</html>

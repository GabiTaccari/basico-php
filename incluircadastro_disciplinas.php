<?php
include_once('conexao.php');
	
//recuperando dados que vem da ágina via post
$cod_dis = $_POST['cod_dis'];
$nome_dis = $_POST['nome_dis'];

//$ = $_POST[''];

//criado a linha de INSERT

$sqlinsert = "insert into disciplinas (codigo_disciplinas, nome_disciplinas) values ('$cod_dis', '$nome_dis')";

//executando instrução SQL
$resultado = @mysqli_query($conexao, $sqlinsert);

if (!$resultado)
{
	die ('Query Inválido:' . @mysqli_error($conexao));
}

else
{
	echo "Registro Cadastrado com Sucesso";
	echo";<br><br><a href=inicio.html> Voltar </a><br><br>";
}

mysqli_close($conexao);
?>
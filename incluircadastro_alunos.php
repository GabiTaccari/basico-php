<?php
include_once('conexao.php');
	
//recuperando dados que vem da ágina via post
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$codigo_curso = $_POST['codigo_curso'];
//$ = $_POST[''];

//criado a linha de INSERT

$sqlinsert = "insert into alunos (matricula_alunos, nome_alunos, endereco_alunos, cidade_alunos, codigo_curso_alunos) values ('$matricula', '$nome', '$endereco', '$cidade', '$codigo_curso')";

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
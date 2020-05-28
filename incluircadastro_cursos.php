<?php
include_once('conexao.php');
	
//recuperando dados que vem da ágina via post
$codigo_curso = $_POST['codigo_curso'];
$nome_curso = $_POST['nome_curso'];
$cod_dis1 = $_POST['cod_dis1'];
$cod_dis2 = $_POST['cod_dis2'];
$cod_dis3 = $_POST['cod_dis3'];
//$ = $_POST[''];

//criado a linha de INSERT

$sqlinsert = "insert into cursos (codigo_cursos, nome_cursos, disciplina1_cursos, disciplina2_cursos, disciplina3_cursos) values ('$codigo_curso', '$nome_curso', '$cod_dis1', '$cod_dis2', '$cod_dis3')";

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
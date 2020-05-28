<?php
 include_once('conexao.php');
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$codigo_curso = $_POST['codigo_curso'];
 echo"<head> <title> Alunos - Alterar </title><meta charset='utf-8'></head>";
 //executa a query com base na conexão
$query = mysqli_query($conexao, "UPDATE cursos set matricula_alunos = '$matricula', nome_alunos = '$nome', endereco_alunos = '$endereco', cidade_alunos='$cidade', codigo_curso_alunos = '$codigo_curso' where matricula_alunos = '{$matricula}'");

 //verifica se a query esta ok
 if(!$query)
 {
	 die('Query Inválida' . mysqli_error($conexao)); // mostra o erro
 }
 //retorna uma matriz que corresponde a linha - ponteiro
 //$dados = mysqli_fetch_array ($query); -------> mostra só o 1º dado

 //recupera as informações do array $dados, usando o nome do campo como referência

 //listando todos os arquivos da tabela
 echo"Dados alterados com sucesso<br>";
 echo"<a href='inicio.html'> Voltar </a>";




 //finaliza a conexao
 mysqli_close($conexao);

 ?>

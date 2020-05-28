<?php
 include_once('conexao.php');
  $codigo_curso = $_POST['codigo_curso'];
$nome_curso = $_POST['nome_curso'];
$cod_dis1 = $_POST['cod_dis1'];
$cod_dis2 = $_POST['cod_dis2'];
$cod_dis3 = $_POST['cod_dis3'];
 echo"<center><h1>Cursos - Excluir</h1></center><br>";
 echo"<head> <title> Cursos - Excluir </title><meta charset='utf-8'></head>";
 //executa a query com base na conexão
$query = mysqli_query($conexao, "UPDATE cursos set codigo_cursos = '$codigo_curso', nome_cursos = '$nome_curso', disciplina1_cursos = '$cod_dis1', disciplina2_cursos='$cod_dis2', disciplina3_cursos = '$cod_dis3' where nome_cursos = '{$nome_curso}'");

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

<?php
 include_once('conexao.php');
  $nome=$_POST["pesquisa"];
 echo"<center><h1>Alunos - Lista Nome</h1></center><br>";
 echo"<head> <title> Alunos - Lista Nome </title><meta charset='utf-8'></head>";
 //executa a query com base na conexão
$query = mysqli_query($conexao, "DELETE FROM alunos WHERE nome_alunos = '{$nome}'");

 //verifica se a query esta ok
 if(!$query)
 {
	 die('Query Inválida' . mysqli_error($conexao)); // mostra o erro
 }
 //retorna uma matriz que corresponde a linha - ponteiro
 //$dados = mysqli_fetch_array ($query); -------> mostra só o 1º dado

 //recupera as informações do array $dados, usando o nome do campo como referência

 //listando todos os arquivos da tabela
 echo"Dados excluídos com sucesso<br>";
 echo"<a href='inicio.html'> Voltar </a>";




 //finaliza a conexao
 mysqli_close($conexao);

 ?>

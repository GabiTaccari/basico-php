<?php
 include_once('conexao.php');
  $nome=$_POST["pesquisa"];
 echo"<center><h1>Disciplinas - Excluir</h1></center><br>";
 echo"<head> <title> Disciplinas - Excluir </title><meta charset='utf-8'></head>";
 //executa a query com base na conexão
$query = mysqli_query($conexao, "DELETE FROM disciplinas WHERE nome_disciplinas = '{$nome}'");

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

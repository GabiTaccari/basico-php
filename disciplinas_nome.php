<?php
 include_once('conexao.php');
  $nome=$_POST['pesquisa'];
 echo"<center><h1>Disciplinas - Lista Nome</h1></center><br>";
 echo"<head> <title> Disciplinas - Lista Nome </title><meta charset='utf-8'></head>";
 //executa a query com base na conexão
 $query=mysqli_query($conexao, "select id_disciplinas, codigo_disciplinas, nome_disciplinas from disciplinas
 where nome_disciplinas = '{$nome}'");

 //verifica se a query esta ok
 if(!$query)
 {
	 die('Query Inválida' . mysqli_error($conexao)); // mostra o erro
 }
 //retorna uma matriz que corresponde a linha - ponteiro
 //$dados = mysqli_fetch_array ($query); -------> mostra só o 1º dado

 //recupera as informações do array $dados, usando o nome do campo como referência

 //listando todos os arquivos da tabela
 echo "<center>";
 echo "<table border='1px'>";
 echo "<tr><th> Código </th><th> Nome </th></tr>";

 while ($dados = mysqli_fetch_array($query))
 {
	 //listando todos os arquivos da tabela
	 echo "<tr>";
	 echo "<td>".$dados['codigo_disciplinas']."</td>";
	 echo "<td>".$dados['nome_disciplinas']."</td>";
 }
 echo"</table>";
 echo"<a href='inicio.html'> Voltar </a>";
 echo "</center>";




 //finaliza a conexao
 mysqli_close($conexao);

 ?>

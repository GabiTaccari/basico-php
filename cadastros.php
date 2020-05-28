  <?php
 include_once('conexao.php');
 
 echo"<center><h1>Cadastros - Lista Geral</h1></center><br>";
 echo"<head> <title> Cadastros - Lista Geral </title> <meta charset='utf-8'></head>";
 //executa a query com base na conexão
 $query=mysqli_query($conexao, "select * from cadastro_nome");
 //verifica se a query esta ok
 if(!$query)
 {
	 die('Query Inválida' . @mysqli_error($conexao)); // mostra o erro
 }
 //retorna uma matriz que corresponde a linha - ponteiro
 //$dados = mysqli_fetch_array ($query); -------> mostra só o 1º dado
 
 //recupera as informações do array $dados, usando o nome do campo como referência
 
 //listando todos os arquivos da tabela
 echo "<center>";
 echo "<table border='1px'>";
 echo "<tr><th> Nome </th><th> Email </th>";

 while ($dados = mysqli_fetch_array($query)) 
 {
	 //listando todos os arquivos da tabela
	 echo "<tr>";
	 echo "<td>".$dados['nome']."</td>";
	 echo "<td>".$dados['email']."</td>";
 }
 echo"</table><br><br>";
 echo"<a href='nome.html'> Voltar </a>";
 echo "</center>";
 
 
 
 
 //finaliza a conexao
 mysqli_close($conexao);
 
 ?>
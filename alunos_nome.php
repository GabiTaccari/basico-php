<?php
 include_once('conexao.php');
  $nome=$_POST["pesquisa"];
 echo"<center><h1>Alunos - Lista Nome</h1></center><br>";
 echo"<head> <title> Alunos - Lista Nome </title><meta charset='utf-8'></head>";
 //executa a query com base na conexão
 $query=mysqli_query($conexao, "select id_alunos, matricula_alunos, nome_alunos, endereco_alunos, cidade_alunos, codigo_curso_alunos from alunos
 where nome_alunos = '{$nome}'");

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
 echo "<tr><th> Matrícula </th><th> Nome </th><th>Endereço</th><th>Cidade</th><th>Código do Curso</th></tr>";

 while ($dados = mysqli_fetch_array($query))
 {
	 //listando todos os arquivos da tabela
	 echo "<tr>";
	 echo "<td>".$dados['matricula_alunos']."</td>";
	 echo "<td>".$dados['nome_alunos']."</td>";
	 echo "<td>".$dados['endereco_alunos']."</td>";
	 echo "<td>".$dados['cidade_alunos']."</td>";
	 echo "<td>".$dados['codigo_curso_alunos']."</td>";
 }
 echo"</table>";
 echo"<a href='inicio.html'> Voltar </a>";
 echo "</center>";




 //finaliza a conexao
 mysqli_close($conexao);

 ?>

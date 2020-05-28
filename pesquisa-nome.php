  <html>
	<head>
		<meta charset="utf-8">
		<title> Conexão com o BD - DIÁRIO DE BORDO </title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header class="cabecalho">
			<div class="logo">
			</div>

			<div class="menu1">
				<br><br><a href="main.html"> Início </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="contato.html"> Contato </a>
			</div>

			<div class="titulo">
				<h1>
					<center>
						CONEXÃO COM O BANCO DE DADOS - DIÁRIO DE BORDO
					</center>
				</h1>
			</div>
		</header>
		<nav class="menu">
			<ul>
				<li><a href="instalacao-server-web.html">Instalação Servidor Web</a></li>
				<li><a href="opcoes-server-web.html">Opções do Servidor Web</a></li>
				<li><a href="manipulacao-fluxo.html"> Manipulação de Fluxo </a></li>
				<li><a href="#">Operadores</a>
					<ul>
						<li><a href="aritmeticos.html"> Operadores Aritméticos </a></li>
						<li><a href="logicos.html"> Operadores Lógicos </a></li>
						<li><a href="comparacao.html"> Operadores de Comparação </a></li>
						<li><a href="outros-operadores.html"> Demais operadores </a></li>
					</ul>
				</li>
				<li><a href="#"> Comando de Fluxo </a>
					<ul>
						<li><b> Estruturas de Dados: </b></li>
							<li><a href="if.html"> if </a></li>
							<li><a href="if-else.html"> if-else </a></li>
							<li><a href="switch.html"> switch </a></li>
						<li><b> Estruturas de Repetição: </b></li>
							<li><a href="for.html"> for </a></li>
							<li><a href="while.html"> while </a></li>
							<li><a href="do-while.html"> do/while </a></li>
					</ul>
				</li>
				<li><a href="vetor-matriz.html"> Vetores e Matrizes </a></li>
				<li><a href="criacao-banco-dados.html"> Criação Banco de Dados </a></li>
				<li><a href="#"> Trabalhando com o BD </a>
					<ul>
						<li><a href="conexao-bd.html"> Conexão com o Banco de Dados </a></li>
						<li><a href="insert-dados-bd.html"> Inserindo dados no BD pelo formulário </a></li>
						<li><a href="pesquisa-geral.html"> Pesquisa geral no BD</a></li>
						<li><a href="pesquisa-nome.html"> Pesquisa por nome no BD</a></li>
						<li><a href="deletar.html"> Deletar dados do BD </a></li>
						<li><a href="alterar.html"> Alterar dados do BD</a></li>
					</ul>
				</li>
			</ul>
		</nav>


		<main class="conteudos">


			<article class="conteudo">
				<img src="img/insert1.jpg"/></a>
				<div class="inner">
					<h2>Passo 1: </h4>
					<p align="justify">Para realizar a busca de dados no banco de pela pesquisa por nome, é necessária a criação de um formulário em que o usuário digitará o que ele quer buscar no banco, seja um nome, endereço, ou outro dado qualquer, e um arquivo php para fazer a busca no banco e mostrar para o usuário o resultado da pesquisa feita. Segue a sintaxe do formulário .html ainda utilizando o method e o action, do exemplo do cadastro de nome e email: </p><br><br>

					 &nbsp;&nbsp;&lt;form name = "pesquisa-nome" <font color="#FF000">action="pesquisa-nome.php" method="post"&gt;<br><br></font>


						&nbsp;&nbsp;&lt;label&gt; Nome: &lt;/label&gt; &lt;input type = "text" name = "nome" required/&gt;  <br>

						&nbsp;&nbsp;&lt;input type = "submit" name="btnpesquisar" value="Pesquisar"&gt;<br>
		&lt;/form&gt;

</div></article>

<article class="conteudo">
				<img src="img/insert1.jpg"/></a>
				<div class="inner">
					<h2>Passo 2: </h4>
						<p align="justify"> Sintaxe do arquivo .php : </p>
						<br><br>
						
  &lt;?php<Br>
 include_once('conexao.php');<Br>
  $nome=$_POST["nome"];<Br>
 //executa a query com base na conexão<Br>
 $query=mysqli_query($conexao, "select nome, email, from diariobordo where nome = '{$nome}'");<Br>
 
 //verifica se a query esta ok<Br>
 if(!$query)<Br>
 {<Br>
	 die('Query Inválida' . mysqli_error($conexao)); // mostra o erro<Br>
 }<Br>
 //retorna uma matriz que corresponde a linha - ponteiro<Br>
 //$dados = mysqli_fetch_array ($query); -------> mostra só o 1º dado<Br>
 
 //recupera as informações do array $dados, usando o nome do campo como referência<Br>
 
 //listando todos os arquivos da tabela<Br>
 echo "&lt;center&gt;";<br>
 echo "&lt;table border='1px'>";<br>
 echo "&lt;tr&gt;&lt;th&gt; Nome &lt;/th&gt;&lt;th&gt; Email &lt;/th&gt;&lt;/tr&gt;";<br>
 
 while ($dados = mysqli_fetch_array($query)) <br>
 {<br>
	 //listando todos os arquivos da tabela<br>
	 echo "&lt;tr&gt;";<br>
	 echo "&lt;td&gt;".$dados['nome']."&lt;/td&gt;";<br>
	 echo "&lt;td&gt;".$dados['email']."&lt;/td&gt;";<br>
 }<br>
 echo"&lt;/table&gt;";<br>
 echo "&lt;/center&gt;";<br>
 
 
 
 
 //finaliza a conexao<br>
 mysqli_close($conexao);<br>
 
 ?&gt;



 <br><br>
				</div>
			</article>


		<article class="conteudo">
				<img src="img/insert1.jpg"/></a>
				<div class="inner">
					<h2>Exemplo</h2> Pesquisa no banco Cadastro (nome e email): <br><BR>
		 

  <?php
 include_once('conexao.php');
  $nome=$_POST["nome"];
 //executa a query com base na conexão
 $query=mysqli_query($conexao, "select nome, email from cadastro where nome = '{$nome}'");
 
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
 echo "<tr><th> Nome </th><th> Email </th></tr>";
 
 while ($dados = mysqli_fetch_array($query)) 
 {
	 //listando todos os arquivos da tabela
	 echo "<tr>";
	 echo "<td>".$dados['nome']."</td>";
	 echo "<td>".$dados['email']."</td>";
 }
 echo"</table>";
 echo "</center>";
 
 
 
 
 //finaliza a conexao
 mysqli_close($conexao);
 
 ?>
<br><br><center>
<a href="pesquisa-nome.html"> Voltar </a></center>
	</body>
</html>







					 <br><br></p>
				</div>
			</article>





			





		</main>
	</body>
</html>

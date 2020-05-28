<html>
	<head>
		<meta charset="utf-8">
		<title> Conexão com o BD - DIÁRIO DE BORDO </title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<?php
include_once('conexao.php');

//recuperando dados que vem da ágina via post
$nome = $_POST['nome'];
$email = $_POST['email'];

//criado a linha de INSERT

$sqlinsert = "insert into cadastro (nome, email) values ('$nome', '$email')";

//executando instrução SQL
$resultado = @mysqli_query($conexao, $sqlinsert);

if (!$resultado)
{
	die ('Query Inválido:' . @mysqli_error($conexao));
}

else
{
	echo"<header class='cabecalho'>";
			echo"div class='logo'>";
			echo"</div>";

			echo"<div class='menu1'>";
				echo"<br><br><a href='main.html'> Início </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='contato.html'> Contato </a>";
			echo"</div>";

			echo"<div class='titulo'>";
				echo"<h1>";
					echo"<center>";
						echo"CONEXÃO COM O BANCO DE DADOS - DIÁRIO DE BORDO";
					echo"</center>";
				echo"</h1>";
			echo"</div>";
		echo"</header>";
		echo"<nav class='menu'>";
			echo"<ul>";
				echo"<li><a href='instalacao-server-web.html'>Instalação Servidor Web</a></li>";
				echo"<li><a href='opcoes-server-web.html'>Opções do Servidor Web</a></li>";
				echo"<li><a href='manipulacao-fluxo.html'> Manipulação de Fluxo </a></li>";
				echo"<li><a href='#'>Operadores</a>";
					echo"<ul>";
						echo"<li><a href='aritmeticos.html'> Operadores Aritméticos </a></li>";
						echo"<li><a href='logicos.html'> Operadores Lógicos </a></li>";
						echo"<li><a href='comparacao.html'> Operadores de Comparação </a></li>";
						echo"<li><a href='outros-operadores.html'> Demais operadores </a></li>";
					echo"</ul>";
				echo"</li>";
				echo"<li><a href='#''> Comando de Fluxo </a>";
					echo"<ul>";
						echo"<li><b> Estruturas de Dados: </b></li>";
							echo"<li><a href='if.html'> if </a></li>";
							echo"<li><a href='if-else.html'> if-else </a></li>";
							echo"<li><a href='switch.html'> switch </a></li>";
						echo"<li><b> Estruturas de Repetição: </b></li>";
							echo"<li><a href='for.html'> for </a></li>";
							echo"<li><a href='while.html'> while </a></li>";
							echo"<li><a href='do-while.html'> do/while </a></li>";
					echo"</ul>";
				echo"</li>";
				echo"<li><a href='vetor-matriz.html'> Vetores e Matrizes </a></li>";
				echo"<li><a href='criacao-banco-dados.html'> Criação Banco de Dados </a></li>";
				echo"<li><a href='#'> Trabalhando com o BD </a>";
					echo"<ul>";
						echo"<li><a href='conexao-bd.html'> Conexão com o Banco de Dados </a></li>";
						echo"<li><a href='insert-dados-bd.html'> Inserindo dados no BD pelo formulário </a></li>";
						echo"<li><a href='buscando-dados-bd.html'> Buscando dados do BD </a></li>";
						echo"<li><a href='insert-dados-bd.html'> Pesquisa geral no BD</a></li>";
						echo"<li><a href='insert-dados-bd.html'> Pesquisa por nome no BD</a></li>";
						echo"<li><a href='deletar.html'> Deletar dados do BD </a></li>";
						echo"<li><a href='alterar.html'> Alterar dados do BD</a></li>";
					echo"</ul>";
				echo"</li>";
			echo"</ul>";
		echo"</nav>";


		echo"<main class='conteudos'>";

		echo"<article class='conteudo'>";
				echo"<div class='inner'>";
					


 echo"<br><br>";
				echo"</div>";
			echo"</article>";

			echo"<article class='conteudo'>";
				echo"<img src='img/insert1.jpg'/></a>";
				echo"<div class='inner'>";
					echo"<h2>Passo 1: </h4>";
					echo"<p align='justify'>Para realizar a inserção do dados no banco de dado através do formulário é utilizado o method e o action do formulário, ficando da seguinte forma em um exemplo básico de inclusão de um email e uma senha no BD:</p><br><br>";

					// no action é o nome do arquivo php que fara a inserção e o method será o modo como será enviada as informações do formulário, ou seja, post: <br>
					echo"&nbsp;&nbsp;&lt;form name = 'cadastro' <font color='#FF000'>action='incluircadastro.php' method='post'&gt;<br><br></font>";


						echo"&nbsp;&nbsp;&lt;label&gt; Nome: &lt;/label&gt; &lt;input type = 'text' name = 'nome' required/&gt;  <br>";
						echo"&nbsp;&nbsp;&lt;label&gt; Nome: &lt;/label&gt;&lt;input type= 'text' name='email' required/>&gt;<br>";

						echo"&nbsp;&nbsp;&lt;input type = 'submit' name='btncadastrar' value='Enviar'&gt;<br>";
		echo"&lt;/form&gt;";

					 echo"<br><br></p>";
				echo"</div>";
			echo"</article>";

			



			echo"<article class='conteudo'>";
				echo"<img src='img/insert1.jpg'/></a>";
				echo"<div class='inner'>";
					echo"<h2>Exemplo Cadastro: </h4>";

							echo "Registro Cadastrado com Sucesso<br><br>";

		echo"<a href='insert-dados-bd.html'> Voltar </a>";


 echo"<br><br>";
				echo"</div>";
			echo"</article>";





		echo"</main>";
}

mysqli_close($conexao);
?>

	</body>
</html>

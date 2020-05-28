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
$mensagem = $_POST['contato'];

//criado a linha de INSERT

$sqlinsert = "insert into contato (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";

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
	echo "<br><br><br><br><center>Registro Cadastrado com Sucesso";
	echo";<br><br><a href=contato.html> Voltar </a><br><br></center>";
}

mysqli_close($conexao);
?>

	</body>
</html>
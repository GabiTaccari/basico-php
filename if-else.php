  <html>
	<head>
		<meta charset="utf-8">
		<title> Estrutura de Dados - DIÁRIO DE BORDO </title>
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
						COMANDO DE FLUXO - DIÁRIO DE BORDO
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
						<li><a href='deletar.html'> Deletar dados do BD </a></li>
						<li><a href='alterar.html'> Alterar dados do BD</a></li>
					</ul>
				</li>
			</ul>
		</nav>


		<main class="conteudos">
			<article class="conteudo">
				<img src="img/if.jpg"/></a>
				<div class="inner">
					<h2> Teoria </h4>
					<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;O construtor if else é um dos recursos mais importantes em muitas linguagens, inclusive no PHP. Permite a execução condicional de fragmentos de código. O PHP apresenta uma estrutura if semelhante a do C.<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;Expressões são avaliadas por seus valores booleanos. Se uma expressão for avaliada como TRUE, o PHP executará a declaração, se avaliada como FALSE, ignorá-la.
					</p>
				</div>
			</article>

			<article class="conteudo">
				<img src="img/if.jpg"/>
				<div class="inner">
					<h2> Estrutura: </h4>
					&lt;?php<br><br>
						&nbsp;&nbsp;if(condicao)<br>
						&nbsp;&nbsp;{<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br><br>
						&nbsp;&nbsp;}<br><br>
						&nbsp;&nbsp;else<br>
						&nbsp;&nbsp;{<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br><br>
						&nbsp;&nbsp;}<br><br>
					?&gt;<br>
				</div>
			</article>

			<article class="conteudo">
				<img src="img/if.jpg"/>
				<div class="inner">
					<h2>  Exemplo:   </h2>
					<p align="justify">
						Digite o seu peso e a sua altura para calcular o seu IMC:<br><br>

					<form name = "if" action="if-else.php" method="post">
					<center>
						<?php
						    $peso = $_POST["n1"];
							$altura = $_POST["n2"];
						    $imc=$peso/($altura*$altura);
						    echo "Seu imc é $imc<p>";
						    if ($imc<20)
						    {
						      echo "Abaixo do peso";
						    }
						    if ($imc >=20 && $imc<=25)
						    {
						      echo "peso normal";
						    }
						    if ($imc>25)
						    {
						      echo "acima do peso";
						    }
						?>

					</center>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>



				</div>
			</article>


		</main>
	</body>
</html>

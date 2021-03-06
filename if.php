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
					<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;O construtor if é um dos recursos mais importantes em muitas linguagens, inclusive no PHP. Permite a execução condicional de fragmentos de código. O PHP apresenta uma estrutura if semelhante a do C.<br><br>
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
					?&gt;<br>
				</div>
			</article>

			<article class="conteudo">
				<img src="img/if.jpg"/>
				<div class="inner">
					<h2>  Exemplo:   </h2>
					<p align="justify">
						Digite a sua idade para que possa ser classificada em alguma das seguintes categorias:<br><br>
						 Infantil A = 5 a 7 anos<br>
						 Infantil B = 8 a 11 anos<br>
						 Juvenil A = 12 a 13 anos<br>
						 Juvenil B = 14 a 17 anos<br>
						 Adutos = Maiores de 18 anos<br>
					<br><br>
					<form name = "if" action="if.php" method="post">
					<center>


						<?php
							$n1 = $_POST['num1'];
							if($n1< 5)
							{
								echo" Digite um número válido ";
							}
							if($n1>=5 && $n1<=7)
							{
								echo" Categoria infantil A ";
							}

							if($n1>=8 && $n1<=11)
							{
								echo" Categoria infantil B ";
							}

							if($n1>=12 && $n1<=13)
							{
								echo" Categoria juvenil A ";
							}

							if($n1>=14 && $n1<=17)
							{
								echo" Categoria juvenil B ";
							}

							if($n1>=18)
							{
								echo" Categoria adultos ";
							}

							echo "<br><br><a href='if.html'><font color='#000000'> Voltar </font></a>";

						?>



					</center>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>

					&lt;?php<br>
							&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;if($n1< 5)<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo" Digite um número válido ";<br>
							&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;if($n1>=5 && $n1<=7)<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo" Categoria infantil A ";<br>
							&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;if($n1>=8 && $n1<=11)<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo" Categoria infantil B ";<br>
							&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;if($n1>=12 && $n1<=13)<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo" Categoria juvenil A ";<br>
							&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;if($n1>=14 && $n1<=17)<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo" Categoria juvenil B ";<br>
							&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;if($n1>=18)<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo" Categoria adultos ";<br>
							&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;&nbsp;echo "&lt;?a href='if.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;"<br>

						?&gt;<br>


				</div>
			</article>


		</main>
	</body>
</html>

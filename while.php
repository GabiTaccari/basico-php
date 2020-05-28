  <html>
	<head>
		<meta charset="utf-8">
		<title> Estrutura de Repetição - DIÁRIO DE BORDO </title>
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
			<li><a href="deletar.html"> Deletar dados do BD </a></li>
			<li><a href="alterar.html"> Alterar dados do BD</a></li>
					</ul>
				</li>
			</ul>
		</nav>


		<main class="conteudos">
			<article class="conteudo">
				<img src="img/while.jpg"/></a>
				<div class="inner">
					<h2> Teoria </h4>
					<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;A condição de parada é testada no início da interação. Se for verdadeira, repete o bloco de comandos; se for falsa, interrompe as repetições<br>

					</p>
				</div>
			</article>

			<article class="conteudo">
				<img src="img/while.jpg"/>
				<div class="inner">
					<h2> Estrutura: </h4>
					&lt;?php<br><br>
						&nbsp;&nbsp;while (expressao)<br>
						&nbsp;&nbsp;{<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos;<br>
						&nbsp;&nbsp;}<br><br>
					?&gt;<br>
				</div>
			</article>

			<article class="conteudo">
				<img src="img/while.jpg"/>
				<div class="inner">
					<h2>  Exemplo:   </h2>
					<p align="justify">

					<br><br>
					<form name = "while" action="while.php" method="post">
					<center>

						<?php
						$num1 = $_POST['n1'];
						$num2 = $_POST['n2'];
						$soma=0;
						if ($num1<$num2)
						{
							while ($num1<=$num2)
							{
								$soma = $soma+$num1;
								$num1++;
							}
							echo"A soma é: ".$soma;
						}
						else
						{
							while ($num2<=$num1)
							{
								$soma = $soma+$num2;
								$num2++;
							}
							echo"A soma é: ".$soma;
						}
						?>

<br><br><a href="while.html"><font color="#000000">Voltar</font></a>

					</center>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>
					&lt;?php<br><br>

						&nbsp;&nbsp;$num1 = $_POST['n1'];<br>
						&nbsp;&nbsp;$num2 = $_POST['n2'];<br>
						&nbsp;&nbsp;$soma=0;<br>
						&nbsp;&nbsp;if ($num1<$num2)<br>
						&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;while ($num1<=$num2)<br>
							&nbsp;&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$soma = $soma+$num1;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$num1++;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;&nbsp;echo"A soma é: ".$soma;<br>
						&nbsp;&nbsp;}<br><br>
						&nbsp;&nbsp;else<br>
						&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;while ($num2<=$num1)<br>
							&nbsp;&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$soma = $soma+$num2;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$num2++;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;&nbsp;echo"A soma é: ".$soma;<br>
						&nbsp;&nbsp;}<br><br>

					?&gt;


				</div>
			</article>


		</main>
	</body>
</html>

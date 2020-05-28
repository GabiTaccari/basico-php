  <html>
	<head>
		<meta charset="utf-8">
		<title>  Estruturas de Repetição - DIÁRIO DE BORDO </title>
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
				<img src="img/do-while.jpg"/></a>
				<div class="inner">
					<h2> Teoria </h4>
					<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Funciona de maneira semelhante ao while; a diferença é que a condição é testada depois do bloco de comandos. Isso garante que pelo menos uma vez o bloco de comandos será executado.<br>
						
					</p>					
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/do-while.jpg"/>
				<div class="inner">
					<h2> Estrutura: </h4>
					&lt;?php<br><br>
						&nbsp;&nbsp;<br>
						&nbsp;&nbsp;do{<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos;<br><br>
						&nbsp;&nbsp;}while (expressao)<br><br>
					?&gt;<br>
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/do-while.jpg"/>
				<div class="inner">
					<h2>  Exemplo:   </h2>
					<p align="justify">
						Digite um número para o cálculo da tabuada
					<br><br>					
					<form name = "while" action="while.php" method="post">
					
						

						<?php
							$n1=$_POST['n1'];
							$mult = 0;
							$tab = 0;
							echo "Tabuada do número: ".$n1."<br>";
							do
							{
								$tab = $mult * $n1;
								echo"".$mult." x 5 = ".$tab."<br>";
								$mult++;
							}while($mult<=10)
						?>
					<br><br><a href="while.html"><font color="#000000">Voltar</font></a>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>
					&lt;?php<br><br>

							&nbsp;&nbsp;$n1=$_POST['n1'];<br>
							&nbsp;&nbsp;$mult = 0;<br>
							&nbsp;&nbsp;$tab = 0;<br>
							&nbsp;&nbsp;echo "Tabuada do número: ".$n1."&lt;br&gt;";<br>
							&nbsp;&nbsp;do<br>
							&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;$tab = $mult * $n1;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo"".$mult." x 5 = ".$tab."&lt;br&gt;";<br>
								&nbsp;&nbsp;&nbsp;&nbsp;$mult++;<br>
							&nbsp;&nbsp;}while($mult<=10)<br><br>
						
					?&gt;
					
						
				</div>
			</article>
			
						
		</main>	
	</body>
</html>
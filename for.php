  <html>
	<head>
		<meta charset="utf-8">
		<title> Estruturas de Repetição - DIÁRIO DE BORDO </title>
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
				<img src="img/for.jpg"/></a>
				<div class="inner">
					<h2> Teoria </h4>
					<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;É utilizado quando se conhece a quantidade total de iterações ou quando se pretende contar essas interações.<br>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;Referente a sintaxe/estrutura, têm se que:<br><br>
						 &nbsp;&nbsp;&nbsp;&nbsp;<b>Inicialização</b> – é uma instrução de atribuição executada apenas uma vez, no início do laço. Geralmente utilizada para inicializar a variável que irá controlar o número de repetições do laço.<br>
						 <br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Condição</b> – é a expressão que controla a parada das repetições. Se for verdadeira, o bloco de comandos é executado novamente; se for falsa, termina.<br>
						 <br>&nbsp;&nbsp;&nbsp;&nbsp;<b>Incremento</b> – define a maneira como a variável de controle do laço será alterada a cada vez que o laço for repetido. Ela é executada ao final da execução de cada repetição do corpo do laço.<br>
					</p>					
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/for.jpg"/>
				<div class="inner">
					<h2> Estrutura: </h4>
					&lt;?php<br><br>
						&nbsp;&nbsp;for(inicializacao; condicao; incremento/decremento)<br>
						&nbsp;&nbsp;{<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos;<br>
						&nbsp;&nbsp;}<br><br>
					?&gt;<br>
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/for.jpg"/>
				<div class="inner">
					<h2>  Exemplo:   </h2>
					<p align="justify">
						Digite dois números inteiros para saber os números pares e ímpares entre o intervalo deles
					<br><br>					
					<form name = "switch" action="switch.php" method="post">
					<center>
						
						<?php
						$num1=$_POST['n1'];
						$num2=$_POST['n2'];

						if ($num1 < $num2)
						{
							for ($i=$num1; $i<=$num2; $i++)
							{
								if ($i % 2 == 0)
								{
									echo "O número <b>".$i.": </b><font color='#FF0000'>é par</font><br>";
								}
								else
								{
									echo "O número <b>".$i." </b><font color='#0000FF'>é impar</font><br>";
								}
							}
						}

						else
						{
							for ($i=$num2; $i<=$num1; $i++)
							{
								if ($i % 2 == 0)
								{
									echo "O número <b>".$i.": </b><font color='#FF0000'>é par</font><br>";
								}
								else
								{
									echo "O número <b>".$i." </b><font color='#0000FF'>é impar</font><br>";
								}
							}
						}


						
						?>
						<br><br><a href="for.html"><font color="#000000">Voltar</font></a>

					</center>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>
					&lt;?php<br><br>

					&nbsp;&nbsp;$num1=$_POST['n1'];<br>
					&nbsp;&nbsp;$num2=$_POST['n2'];<br><br>

						&nbsp;&nbsp;if ($num1 < $num2)<br>
						&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;for ($i=$num1; $i<=$num2; $i++)<br>
							&nbsp;&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($i % 2 == 0)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "O número &lt;b&gt;".$i.": &lt;/b&gt;&lt;font color='#FF0000'&gt;é par&lt;/font&gt;&lt;br&gt;";<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "O número &lt;b&gt;".$i." &lt;/b&gt;&lt;font color='#0000FF'&gt;é impar&lt;/font&gt;&lt;br&gt;";<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
						&nbsp;&nbsp;}<br><br>

						&nbsp;&nbsp;else<br>
						&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;for ($i=$num2; $i<=$num1; $i++)<br>
							&nbsp;&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($i % 2 == 0)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "O número &lt;b&gt;".$i.": &lt;/b&gt;&lt;font color='#FF0000'&gt;é par&lt;/font&gt;&lt;br&gt;";<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "O número &lt;b&gt;".$i." &lt;/b&gt;&lt;font color='#0000FF'&gt;é impar&lt;/font&gt;&lt;br&gt;";<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
						&nbsp;&nbsp;}<br>
						
					?&gt;<br>
					
						
				</div>
			</article>
			
						
		</main>	
	</body>
</html>
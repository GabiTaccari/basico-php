  <html>
	<head>
		<meta charset="utf-8">
		<title> Manipulação de Fluxo - DIÁRIO DE BORDO </title>
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
						MANIPULAÇÃO DE FLUXO - DIÁRIO DE BORDO
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
				<img src="img/concatenacao.jpg"/></a>
				<div class="inner">
					<h2> Concatenação de Strings ( . ) : </h4>
					<p align="justify">O operador de concatenação de Strings é utilizado para pegar o valor que está contido em um variável, representado pelo sinal de ponto final ( . ), é dado pela seguinte sintaxe no php:   <br><br></p>
					echo"A informação contida é".$variavel;<br><br>
					Exemplo: <br><br>
					<form name = "concatenacao" action="concatenacao.php" method="post">
					<center>
						
						<?php
							echo "Nome:".$_POST['nome'];
							echo "<br>";
							echo "Idade:".$_POST['idade'];
							echo "<br><br><a href='outros-operadores.html'><font color='#000000'> Voltar </a>";
						?>
<br></center>
					</form>
					<br>

					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
						&nbsp;&nbsp;echo "Nome:".$_POST['nome'];<br>
						&nbsp;&nbsp;echo "&lt;br>";<br>
						&nbsp;&nbsp;echo "Idade:".$_POST['idade'];<br>
						&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='outros-operadores.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;";<br>
					?&gt;<br>
					
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/atribuicao.jpg"/>
				<div class="inner">
					<h2> = : </h4>
					<p align="justify"> O operador de atribuição é utilizado para atribuir um valor para determinada variável, representado pelo sinal de igual ("="), é dado pela seguinte sintaxe: <br><br></p>
					$variavel1 = $valor_qualquer;<br><br>
					Exemplo: <br>
					Digite um número qualquer, o qual será atribuído uma soma de +5.
					
					<form name = "atribuicao" action="atribuicao.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>

					</form>
					<br>
					<b>Código php utilizado:</b>
					<br><br>
					&lt;?php<br>
						&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
						&nbsp;&nbsp;$num2=5;<br>
						&nbsp;&nbsp;$res = $n1+$num2;<br>
						&nbsp;&nbsp;echo "O número final é: ". $res. "&lt;br&gt;&lt;br&gt;";<br>
						&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='outros-operadores.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;";<br>
					?&gt;<br>


				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/incremento.jpg"/>
				<div class="inner">
					<h2>  ++  : </h2>
					<p align="justify"> O operador de incremento é utilizado para somar +1 ao valor armazenado em uma variável, representado por dois sinais de adição (++), é dado pela seguinte sintaxe: <br><br></p>
					$variavel++;<br><br>
					Exemplo:<br>
					Digite um número, e nele será incrementado +1 utilizando o incremento.
					
					<form name = "incremento" action="incremento.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>
					&lt;?php<br>
						&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
						&nbsp;&nbsp;$n1++;<br>
						&nbsp;&nbsp;echo "O número final é: ". $n1. "&lt;br&gt;&lt;br&gt;";<br>
						&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='outros-operadores.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;";<br>
					?&gt;<br>
					
						
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/decremento.jpg"/>
				<div class="inner">
					<h2> -- :</h2>
					<p align="justify"> O operador de decremento é utilizado para subtrair -1 ao valor armazenado em uma variável, representado por dois sinais de subtração (--), é dado pela seguinte sintaxe: <br><br></p>
					$variavel--; <br><br>
					Exemplo:<br>
					Digite um número, e nele será decrementado -1 utilizando o operador de decremento.
					
					<form name = "decremento" action="decremento.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>

					</form>
					<br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
						&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
						&nbsp;&nbsp;$n1--;<br>
						&nbsp;&nbsp;echo "O número final é: ". $n1. "&lt;br&gt;&lt;br&gt;";<br>
						&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='outros-operadores.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;";<br>
					?&gt;<br>
					
				</div>
			</article>				
		</main>	
	</body>
</html>
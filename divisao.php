   <html>
	<head>
		<meta charset="utf-8">
		<title> Operadores Aritméticos - DIÁRIO DE BORDO </title>
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
						OPERADORES ARITMÉTICOS - DIÁRIO DE BORDO
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
				<img src="img/adicao.jpg"/></a>
				<div class="inner">
					<h2>Adição: </h4>
					<p align="justify">O operador adição é utilizado para realizar contas de soma, representado pelo sinal de positivo (+), é dado pela seguinte sintaxe: <br><br></p>
					$resultado = $variavel1 + $variavel2;<br><br>
					Exemplo:
					<form name = "adicao" action="adicao.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><label> Digite outro numero: </label><input type="text" name="num2" required/><p/></tr></td>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>
						</center>
					</form>
					<br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;&nbsp;$n2 = $_POST['num2'];<br>
							&nbsp;&nbsp;&nbsp;$res=$n1+$n2;<br>
							&nbsp;&nbsp;&nbsp;echo "O resultado é: ". $res. "&lt;br&gt;&lt;br&gt;";<br>
							&nbsp;&nbsp;&nbsp;echo "&lt;?a href='aritmeticos.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;"<br>
					?&gt;
					
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/subtracao.jpg"/>
				<div class="inner">
					<h2>Subtração: </h4>
					<p align="justify"> O operador subtração é utilizado para realizar contas de menos, representado pelo sinal de negativo (-), é dado pela seguinte sintaxe: <br><br></p>
			$resultado = $variavel1 - $variavel2;<br><br>
					Exemplo:
					
					<form name = "subtracao" action="subtracao.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><label> Digite outro numero: </label><input type="text" name="num2" required/><p/></tr></td>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>
						</center>
					</form>
					<br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;&nbsp;$n2 = $_POST['num2'];<br>
							&nbsp;&nbsp;&nbsp;$res=$n1-$n2;<br>
							&nbsp;&nbsp;&nbsp;echo "O resultado é: ". $res. "&lt;br&gt;&lt;br&gt;";<br>
							&nbsp;&nbsp;&nbsp;echo "&lt;?a href='aritmeticos.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;"<br>
					?&gt;

				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/multiplicacao.jpg"/>
				<div class="inner">
					<h2>Multiplicação: </h2>
					<p align="justify"> O operador multiplicação é utilizado para realizar contas de vezes, representado pelo sinal de asterisco (*), é dado pela seguinte sintaxe: <br><br></p>
					$resultado = $variavel1 * $variavel2;<br><br>
					Exemplo:
					
					<form name = "multiplicacao" action="multiplicacao.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><label> Digite outro numero: </label><input type="text" name="num2" required/><p/></tr></td>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>
						</center>
					</form>
					<br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;&nbsp;$n2 = $_POST['num2'];<br>
							&nbsp;&nbsp;&nbsp;$res=$n1*$n2;<br>
							&nbsp;&nbsp;&nbsp;echo "O resultado é: ". $res. "&lt;br&gt;&lt;br&gt;";<br>
							&nbsp;&nbsp;&nbsp;echo "&lt;?a href='aritmeticos.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;"<br>
					?&gt;
						
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/divisao.jpg"/>
				<div class="inner">
					<h2>Divisão:</h2>
					<p align="justify"> O operador divisão é utilizado para realizar contas de dividir, representado pelo sinal de barra (/), é dado pela seguinte sintaxe: <br><br></p>
					$resultado = $variavel1 / $variavel2;<br><br>
					Exemplo:
					
					<form name = "divisao" action="divisao.php" method="post">
					<center>
						
						<?php
							$n1 = $_POST['num1'];
							$n2 = $_POST['num2'];
							$res=$n1/$n2;
							echo "<br>O resultado é: ". $res. "<br><br>";
							echo "<a href='aritmeticos.html'><font color='#000000'> Voltar </a>"
						?>
						</center>
					</form>
					<br><br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;&nbsp;$n2 = $_POST['num2'];<br>
							&nbsp;&nbsp;&nbsp;$res=$n1/$n2;<br>
							&nbsp;&nbsp;&nbsp;echo "O resultado é: ". $res. "&lt;br&gt;&lt;br&gt;";<br>
							&nbsp;&nbsp;&nbsp;echo "&lt;?a href='aritmeticos.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;"<br>
					?&gt;
					
				</div>
			</article>
			
			<article class="conteudo">
				<img src="" alt =""/>
				<div class="inner">
					<h4></h4><br>
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/modulo.jpg"/>
				<div class="inner">
					<h2>Módulo/Resto da divisão:</h2><br>
					
					<p align="justify"> O operador de módulo é utilizado para obter o resto de contas de divisão, representado pelo sinal de porcentagem (%), é dado pela seguinte sintaxe: <br><br></p>
					$resultado = $variavel1 % $variavel2;<br><br>
					Exemplo:
					
					<form name = "modulo" action="modulo.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><label> Digite outro numero: </label><input type="text" name="num2" required/><p/></tr></td>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>
						</center>
					</form>
					<br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;&nbsp;$n2 = $_POST['num2'];<br>
							&nbsp;&nbsp;&nbsp;$res=$n1%$n2;<br>
							&nbsp;&nbsp;&nbsp;echo "O resultado é: ". $res. "&lt;br&gt;&lt;br&gt;";<br>
							&nbsp;&nbsp;&nbsp;echo "&lt;?a href='aritmeticos.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/a&gt;"<br>
					?&gt;
					
				</div>
			</article>
			
		
		</main>	
	</body>
</html>
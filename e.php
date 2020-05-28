  <html>
	<head>
		<meta charset="utf-8">
		<title> Operadores Lógicos - DIÁRIO DE BORDO </title>
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
						OPERADORES LÓGICOS - DIÁRIO DE BORDO
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
				<img src="img/delimitador-codigo.jpg"/></a>
				<div class="inner">
					<h2>&& : </h4>
					<p align="justify">O operador lógico && é utilizado quando é necessária a confirmação se duas afirmações são verdadeiras, representado por duas letras e comercial (&&), é dado pela seguinte sintaxe: <br><br></p>
					($variavel1 == condicao && $variavel2 == condicao)<br><br>
					Exemplo:
					Se as duas notas digitadas forem maior que 7, o aluno está aprovado.
					<center>
					<form name = "e" action="e.php" method="post">
						<?php
							$n1 = $_POST['num1'];
							$n2 = $_POST['num2'];
							if($n1>=7 && $n2>=7){
								echo "Oi";
							
						}
						?>
					</center>
					</form>
					<br><br>
					Código php utilizado:
					
				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/learn-php.jpg" alt ="Servidor Web"/>
				<div class="inner">
					<h2>|| : </h4>
					<p align="justify"> O operador ou é utilizado para verificar se pelo menos uma afirmação estabelecida é verdadeira, representado pelo sinal de duas barras verticais (||), é dado pela seguinte sintaxe: <br><br></p>
					($variavel1 == condicao ||  $variavel2==condicao)<br><br>
					Exemplo:
					Se pelo menos uma das notas do aluno for maior que nove, ele estará aprovado independente da outra nota.
					
					<form name = "ou" action="ou.php" method="post">
					<center>
						
						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><label> Digite outro numero: </label><input type="text" name="num2" required/><p/></tr></td>
						<tr><td><input type = "submit" name="btncalcular" value="Calcular"></center></tr></td>
					</form>
					<br><br>
					Código php utilizado:

				</div>
			</article>
			
			<article class="conteudo">
				<img src="img/helloworld.png"/>
				<div class="inner">
					<h2>! : </h2>
					<p align="justify"> O operador de negação lógica (!) inverte o significado do respectivo operando. O operando deve ser do tipo aritmético ou ponteiro (ou uma expressão que é avaliada para o tipo aritmético ou ponteiro). O operando é convertido implicitamente no tipo boolean. O resultado será true se o operando convertido for false; o resultado será false se o operando convertido for true. O resultado é do tipo boollean. é dado pela seguinte sintaxe: <br><br></p>
					!$variavel;<br><br>
					
					<br>
						
				</div>
			</article>
			
				
		</main>	
	</body>
</html>
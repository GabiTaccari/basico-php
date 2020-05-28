  <html>
	<head>
		<meta charset="utf-8">
		<title> Operadores de Comparação - DIÁRIO DE BORDO </title>
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
						OPERADORES DE COMPARAÇÃO - DIÁRIO DE BORDO
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
				<img src="img/igual-a.jpg"/></a>
				<div class="inner">
					<h2> == : </h4>
					<p align="justify">O operador de comparação "igual a" é utilizado para realizar a comparação de dois valores, representado pelo sinal de dois iguais (==).Retornam TRUE caso a verificação for verdade e FALSE caso for falsa é dado pela seguinte sintaxe: <br><br></p>
					$variavel1 == $variavel2;<br><br>
					Exemplo: <br><br>
					Digite seu ano de nascimento para saber se você é de maior
					<form name = "igual-a" action="igual-a.php" method="post">
					<center>

						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><input type = "submit" name="btncalcular" value="Verificar"></center></tr></td>

					</center>
					</form>
					<br><br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;$n1 = $_POST['num1'];<br>
							&nbsp;&nbsp;$idade = 2017-$n1;<br>
							&nbsp;&nbsp;if ($idade == 18 || $idade > 18)<br>
							&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;	echo"Maior de idade";<br>
							&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;if ($idade <18)<br>
							&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;	echo"Menor de idade";<br>
							&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='comparacao.html'&gt;&lt;font color='#000000'&gt; Voltar &lt;/font&gt;&lt;/a&gt;";<br>

						?&gt;

				</div>
			</article>

			<article class="conteudo">
				<img src="img/diferente-de.jpg"/>
				<div class="inner">
					<h2>!= : </h4>
					<p align="justify"> O operador de diferença, 'diferente de', é utilizado para realizar verificações se os valores armazenados em duas variáveis são diferentes, retornando TRUE se forem diferentes e FALSE se forem iguais, representado pelo sinal de um ponto de exclamação e um igual ("=").  é dado pela seguinte sintaxe: <br><br></p>
				$variavel1 != $variavel2;<br><br>
					Exemplo: <br>
					Digite um número para saber se ele é par ou ímpar.

					<form name = "diferente-de" action="diferente-de.php" method="post">
					<center>

						<tr><td><br></tr></td>
						<tr><td><label> Digite um número: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><input type = "submit" name="btncalcular" value="Verificar"></center></tr></td>

					</form>
					<br>
					<b>Código php utilizado:</b>
					<br><br>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$n1 = $_POST['num1']<br>
							&nbsp;&nbsp;&nbsp;if($n1 % 2 != 0)
							&nbsp;&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo"O numero é: &lt;font color='#FF000'&gt;Impar&lt;/font&gt;";<br>
							&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;else
							&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo"O numero é: &lt;font color='#FF000'&gt;Par&lt;/font&gt;";<br>
							&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='comparacao.html'&gt;&lt;font color='#000000'&gt;Voltar &lt;/a&gt;"<br>

						?&gt;



				</div>
			</article>

			<article class="conteudo">
				<img src="img/maior_menor.jpg"/>
				<div class="inner">
					<h2> > e < : </h2>
					<p align="justify"> Os operadores maior e o de menor são utilizados para verificar se o valor armazenado é maior ou menor, respectivamente, do que outro valor ou outra variável, representado pelo sinal de maior (>) e o sinal de menor (<). Retornam TRUE caso a verificação for verdade e FALSE caso for falsa é dado pela seguinte sintaxe: <br><br></p>
					$variavel1 > $variavel2;<br><br>  $variavel1 < $variavel2;<br><br>
					Exemplo:<br><br>

					<form name = "maior-menor" action="maior-menor.php" method="post">
					<center>

						<?php
							$idade = $_POST['num1'];

							if ($idade< 1)
							{
							echo "Digite uma idade válida";
							}

							if($idade>0 && $idade < 11)
							{
							echo"Criança";
							}
							if($idade>10 && $idade < 18)
							{
								echo"Adolescente";
							}
							if ($idade>17 && $idade < 65)
							{
								echo"Adulto";
							}
							if ($idade>64)
							{
								echo"Idoso";
							}

							echo "<br><br><a href='comparacao.html'><font color='#000000'>Voltar </a>"

						?>
					</center>
					</form>
					<br>
					<b>Código php utilizado: <br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;&nbsp;$idade = $_POST['num1'];<br>

							&nbsp;&nbsp;&nbsp;if ($idade< 1)<br>
							&nbsp;&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Digite uma idade válida";;<br>
							&nbsp;&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;&nbsp;if($idade>0 && $idade < 11)<br>
							&nbsp;&nbsp;&nbsp;{<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo"Criança";<br>
							&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;if($idade>10 && $idade < 18)<br>
							&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo"Adolescente";<br>
							&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;if ($idade>17 && $idade < 65)<br>
							&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo"Adulto";<br>
							&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;&nbsp;if ($idade>64)<br>
							&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo"Idoso";<br>
							&nbsp;&nbsp;&nbsp;}<br>

							&nbsp;&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='comparacao.html'&gt;&lt;font color='#000000'&gt;Voltar &lt;/a&gt;"<br>

						?&gt;


				</div>
			</article>

			<article class="conteudo">
				<img src="img/maior-menor-igual.jpg"/>
				<div class="inner">
					<h2> >= e <=</h2>
					<p align="justify"> Os operadores maior que e menor que são utilizados para realizar verificações se o valor armazenado é maior ou menor, respectivamente, representados pelo sinal de maior e igual (>=) e menor e igual (<=); Retornam TRUE caso a verificação for verdade e FALSE caso for falsa, é dado pela seguinte sintaxe: <br><br></p>
					$variavel1 >= $variavel2;<br><br>$variavel1 <= $variavel2;<br><br>
					Exemplo:<br>
					Digite sua pontuação em um jogo de natação para saber qual a sua qualificação nesse esporte

					<form name = "maior-menor-igual" action="maior-menor-igual.php" method="post">
					<center>

						<tr><td><br></tr></td>
						<tr><td><label> Digite sua pontuação: </label> <input type = "text" name = "num1" required/><p/></tr></td><br>
						<tr><td><input type = "submit" name="btncalcular" value="Verificar"></center></tr></td>
					</form>
					<br>
					<b>Código php utilizado:<br><br></b>
					&lt;?php<br>
							&nbsp;&nbsp;$pont = $_POST['num1'];<br>

					&nbsp;&nbsp;if ($pont>=0 && $pont<=7)<br>
								&nbsp;&nbsp;{<br>
											&nbsp;&nbsp;&nbsp;&nbsp;echo "Pontuação ruim, precisa melhorar";<br>
					&nbsp;&nbsp;}<br>

					&nbsp;&nbsp;if($pont>7 && $pont <= 12)<br>
					&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo"Pontuação regular";<br>
								&nbsp;&nbsp;}<br>
					&nbsp;&nbsp;if($pont>13 && $pont <= 18)<br>
					&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;echo"Pontuação boa";<br>
								&nbsp;&nbsp;}<br>
					&nbsp;&nbsp;if ($pont>18)<br>
					&nbsp;&nbsp;{<br>
					&nbsp;&nbsp;&nbsp;&nbsp;echo"Pontuação muito boa/excelente";<br>
											&nbsp;&nbsp;}<br>

					&nbsp;&nbsp;echo "&lt;br&gt;&lt;br&gt;&lt;a href='comparacao.html'&gt;&lt;font color='#000000'&gt;Voltar &lt;/a&gt;"<br>

											?&gt;<br>

				</div>
			</article>
		</main>
	</body>
</html>

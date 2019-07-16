<?php
require_once("settings/conexao.php");

// cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM cadastro ";

if(isset($_GET['send'])){
	$nome     = $_GET['nome'];
	$telefone = $_GET['telefone'];
	$email    = $_GET['email'];
	$query   .= "WHERE nome LIKE '%$nome%' AND telefone LIKE '%$telefone%' AND email LIKE '%$email%'";
}

// executa a query
$dados = mysqli_query($con, $query) or die(mysql_error());

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>
<html>
	<head>
		<title>Visualização - Agenda</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../../index.html">Agenda</a></div>
				<a href="#menu">Menu</a>
			</header>
			
			<div id="pesquisar">
				<button class="button button5" onclick="mostrar('Busca')">Pesquisar</button>
			</div>
			
			<div id="ExibirBotao">
				<form id="Busca" action="/scripts/exibir.php" method="GET" name="Procurar">	
					<input type="text" name="nome" style="width:15em" placeholder="Nome"/>
					<input type="text" name="email" style="width:15em" placeholder="E-mail"/>
					<input type="text" name="telefone" style="width:15em" placeholder="Telefone"/>
					<input type="submit" name="send" value="Enviar"/>
				</form>
			</div>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="cadastro.php">Cadastro de Contatos</a></li>
					<li><a href="exibir.php">Visualizar Contatos</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Aqui estão seus contatos</h1>
							</header>
							<div class="align-center">
								<?php
									// se o número de resultados for maior que zero, mostra os dados
									if($total > 0) {
										$exi = $con->query($query);
										while ($linha = $exi->fetch_assoc()) {
											echo "<p>";
												echo "Nome: ".$linha['nome']."<br/>";
												echo "Telefone: ".$linha['telefone']."<br/>";
												echo "Email: ".$linha['email']."<br/>";
												echo "<a href='editar.php?id=".$linha['id']."' style='color: #005ce6' >Editar </a> / ";
												echo "<a href='excluir.php?id=".$linha['id']."' style='color: #990000' >Excluir</a>";
											echo "</p>";
										}
									}
								?>
								</div>
							</div>
						</div>
					</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.scrolly.min.js"></script>
			<script src="../../assets/js/jquery.scrollex.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<script src="../../assets/js/main.js"></script>
			<script src="../../assets/js/buttonHide.js"></script>

	</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>
<?php

// Aqui você se conecta ao banco
require_once("settings/conexao.php");
$id = $_GET["id"];
settype($id, "integer");

// Executa uma consulta 
$sql = "select * from cadastro where id = $id";
$query = $con->query($sql);
while ($dados = $query->fetch_assoc()) {
$id            = $dados["id"];
$nome          = $dados["nome"];
$telefone      = $dados["telefone"];
$email         = $dados["email"];}

?>

<html>
	<head>
		<title>Exclusão - Agenda</title>
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
								<h1>Exclusão de Registro</h1>
							</header>
							<div class="align-center">
								<form id="form1" name="form1" method="post" action="class/salvar_exclusao.php">
									
									ID:<br>
									<input type="text" readonly name="id" id="id" value="<?php echo $id;?>" /><br>
									Nome:<br>
									<input type="text" readonly  name="nome" id="nome" value="<?php echo $nome;?>" /><br>
									Telefone:<br>
									<input type="text" readonly  name="telefone" id="telefone" value="<?php echo $telefone;?>" /><br>
									E-Mail:<br>
									<input type="text" readonly  name="email" id="email" value="<?php echo $email;?>" /><br>
									
								<input type="submit" onClick="return confirm('Deseja mesmo apagar o registro?');" name="Submit" value="Excluir" id="button-form" />
								 </form>
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

	</body>
</html>
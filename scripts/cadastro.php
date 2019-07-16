<?php
//require_once ("class/dados.php");
//$dados = new dados;

if(isset($_POST['btn-submit'])){
  $nome      = $_POST['nome'];
  $rua       = $_POST['rua'];
  $numero    = $_POST['numero'];
  $bairro    = $_POST['bairro'];
  $cidade    = $_POST['cidade'];
  $estado    = $_POST['estado'];
  $telefone  = $_POST['telefone'];
  $email     = $_POST['email'];
  $sexo      = $_POST['sexo'];
  $dataNasc  = $_POST['dataNasc'];
  
  
}

?>

<html>
	<head>
		<title>Cadastro - Agenda</title>
		<meta charset="utf-8" />
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
					<li><a href="../../index.html">Home</a></li>
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
								<h1>Cadastro de Contatos</h1>
								<p>Armazene as informações de seus contatos aqui.</p>
							</header>
							<div class="align-center">
									<form action='class/dados.php' method="post">
										Nome:<br>
										<input type="text" name="nome" style="width:15em"><br>
										Rua:<br>
										<input type="text" name="rua" style="width:15em"><br>
										Numero:<br>
										<input type="text" name="numero" style="width:15em"><br>
										Bairro:<br>
										<input type="text" name="bairro" style="width:15em"><br>
										Cidade:<br>
										<input type="text" name="cidade" style="width:15em"><br>
										Estado:<br>
										<select name="estado" style="width:15em"> 
											<option value="estado">Selecione o Estado</option> 
											<option value="ac">Acre</option> 
											<option value="al">Alagoas</option> 
											<option value="am">Amazonas</option> 
											<option value="ap">Amapá</option> 
											<option value="ba">Bahia</option> 
											<option value="ce">Ceará</option> 
											<option value="df">Distrito Federal</option> 
											<option value="es">Espírito Santo</option> 
											<option value="go">Goiás</option> 
											<option value="ma">Maranhão</option> 
											<option value="mt">Mato Grosso</option> 
											<option value="ms">Mato Grosso do Sul</option> 
											<option value="mg">Minas Gerais</option> 
											<option value="pa">Pará</option> 
											<option value="pb">Paraíba</option> 
											<option value="pr">Paraná</option> 
											<option value="pe">Pernambuco</option> 
											<option value="pi">Piauí</option> 
											<option value="rj">Rio de Janeiro</option> 
											<option value="rn">Rio Grande do Norte</option> 
											<option value="ro">Rondônia</option> 
											<option value="rs">Rio Grande do Sul</option> 
											<option value="rr">Roraima</option> 
											<option value="sc">Santa Catarina</option> 
											<option value="se">Sergipe</option> 
											<option value="sp">São Paulo</option> 
											<option value="to">Tocantins</option> 
										</select><br>
										Telefone:<br>
										<input type="text" name="telefone" style="width:15em"><br>
										E-mail:<br>
										<input type="email" name="email" style="width:15em"><br>
										Sexo:<br>
										<select name="sexo" style="width:15em"> 
											<option value="sexo">Escolha o seu sexo</option> 
											<option value="homem">Homem</option> 
											<option value="mulher">Mulher</option> 
											<option value="outros">Outros</option> 
										</select><br>
										Data de Nascimento: <br>
										<input type="date" name="dataNasc" style="width:15em"><br><br><br>
										<button type="submit" name="btn-submit" onclick="msg()">&nbsp;Cadastrar</button>
											<script>
											function msg() {
												alert("Cadastro Realizado!");
											}
											</script>
									</form> 
							</div>
							<div class="align-right">
							<p>Deseja ver seus contatos? <a href="login.php">Veja Aqui!</a></p>
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
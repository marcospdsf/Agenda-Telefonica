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
$rua           = $dados["rua"];
$numero        = $dados["numero"];
$bairro        = $dados["bairro"];
$cidade        = $dados["cidade"];
$estado        = $dados["estado"];
$telefone      = $dados["telefone"];
$email         = $dados["email"];}
$sexo          = $dados["sexo"];
$dataNasc      = $dados["dataNasc"];
?>

<html>
	<head>
		<title>Edição - Agenda</title>
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
								<h1>Faça suas alterações</h1>
							</header>
							<div class="align-center">
									<form method="post" action="class/salvar_edicao.php">
										ID:<br>
										<input type="text" readonly name="id" id="id" value="<?php echo $id;?>" style="width:15em"><br>
										Nome:<br>
										<input type="text" name="nome" id="nome" value="<?php echo $nome;?>" style="width:15em"><br>
										Rua:<br>
										<input type="text" name="rua" id="rua" value="<?php echo $rua;?>" style="width:15em"><br>
										Numero:<br>
										<input type="text" name="numero" id="numero" value="<?php echo $numero;?>" style="width:15em"><br>
										Bairro:<br>
										<input type="text" name="bairro" id="bairro" value="<?php echo $bairro;?>" style="width:15em"><br>
										Cidade:<br>
										<input type="text" name="cidade" id="cidade" value="<?php echo $cidade;?>" style="width:15em"><br>
										Estado:<br>
										<select name="estado" id="estado" value="<?php echo $estado;?>" style="width:15em"> 
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
										<input type="text" name="telefone" id="telefone" value="<?php echo $telefone;?>" style="width:15em"><br>
										E-mail:<br>
										<input type="email" name="email" id="email" value="<?php echo $email;?>" style="width:15em"><br>
										Sexo:<br>
										<select name="sexo" id="sexo" value="<?php echo $sexo;?>" style="width:15em"> 
											<option value="sexo">Escolha o seu sexo</option> 
											<option value="homem">Homem</option> 
											<option value="mulher">Mulher</option> 
											<option value="outros">Outros</option> 
										</select><br>
										Data de Nascimento: <br>
										<input type="date" name="dataNasc" id="dataNasc" value="<?php echo $dataNasc;?>" style="width:15em"><br><br>
										<input type="submit" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="Salvar" id="button-form" />
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
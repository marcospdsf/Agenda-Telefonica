<?php

require_once("../settings/conexao.php");

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id            = $_POST["id"];
$nome          = $_POST["nome"];
$rua           = $_POST["rua"];
$numero        = $_POST["numero"];
$bairro        = $_POST["bairro"];
$cidade        = $_POST["cidade"];
$estado        = $_POST["estado"];
$telefone      = $_POST["telefone"];
$email         = $_POST["email"];
$sexo          = $_POST["sexo"];
$dataNasc      = $_POST["dataNasc"];

$sql = 'UPDATE cadastro SET nome = ?, rua = ?, numero = ?, bairro = ?, cidade = ?, estado = ?, telefone = ?, email = ?, sexo = ?, dataNasc = ? WHERE cadastro.id = ?';
$stmt = $con->prepare($sql) or die($con->error);

if(!$stmt){
  echo 'erro na consulta: '. $mysqli->errno .' - '. $mysqli->error;
}

$stmt->bind_param('ssssssssssi', $nome, $rua, $numero, $bairro, $cidade, $estado, $telefone, $email, $sexo, $dataNasc, $id);
$stmt->execute();

//print_r($_POST);
header("Location: ../exibir.php");
?>
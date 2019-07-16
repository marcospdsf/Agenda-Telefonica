<?php

require_once("../settings/conexao.php");

@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id            = $_POST["id"];

$sql = 'DELETE FROM cadastro where cadastro.id = ?';
$stmt = $con->prepare($sql) or die($con->error);

if(!$stmt){
  echo 'erro na consulta: '. $mysqli->errno .' - '. $mysqli->error;
}

$stmt->bind_param('i',  $id);
$stmt->execute();

header("Location: ../exibir.php");
?>
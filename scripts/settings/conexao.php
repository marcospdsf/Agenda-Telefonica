<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "agenda";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
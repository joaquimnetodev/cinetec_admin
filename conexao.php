<?php

$user = 'root';
$password = 'root';
$dbname = 'cinetec';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $dbname);

echo "<p>CONECTADO</p>";

if($mysqli->error) {
  die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>

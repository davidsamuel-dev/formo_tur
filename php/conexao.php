<?php
$hostname = "localhost";
$bancodedados = "formo_tur";
$username = "root";
$password = "";

$conexao = new mysqli($hostname, $username, $password, $bancodedados);

if ($conexao->connect_error) {
    echo "Falha ao conectar: (" . $conexao->connect_error . ") " . $conexao->connect_error;
}
?>

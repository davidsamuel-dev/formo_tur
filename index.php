<?php
$hostname = "localhost";
$bancodedados = "site1";
$usuario = "root";
$senha = "";

$mysqli = new $mysqli($hostname, $username, $password, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<body>
    <h1>teste</h1>
</body>
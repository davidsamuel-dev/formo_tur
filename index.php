<?php

include("./php/conexao.php");

$sql = "SELECT * FROM usuario";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if ($escolha == "listar"){
            $sql = "SELECT * FROM local";
            $resultado = mysqli_query($conexao, $sql);

            while ($registro = mysqli_fetch_assoc($resultado)){
                $id = $registro['loc_id'];
                $nome = $registro['loc_nome'];
                $descricao = $registro['loc_decricao'];
                $endereco = $registro['loc_endereco'];
                $urlmapa = $registro['loc_url_mapa'];
                $data_mod = $registro['loc_dt_mod'];
                $categoria = $registro['loc_cat_id'];
                $usuario = $registro['loc_usu_id'];
            }
        }
</body>

</html>
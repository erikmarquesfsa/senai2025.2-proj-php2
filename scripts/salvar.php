<?php

$produto = $_POST['n_produto'];
$categoria = $_POST['categoria'];
$qtde_estoque = $_POST['qtde_estoque'];
$valor = $_POST['valor'];
$validade = $_POST['validade'];

$sql = "INSERT INTO produto values (null,'$produto','$categoria','$qtde_estoque','$valor','$validade')";

?>
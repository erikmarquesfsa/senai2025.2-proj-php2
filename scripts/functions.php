<?php

function verificarProduto($produto){
    include "config.php";
    $sql = "SELECT id FROM produto WHERE nome_produto = '$produto'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;
    
    return $total;
}

?>
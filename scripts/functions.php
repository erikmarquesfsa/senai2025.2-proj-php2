<?php

function verificarProduto($produto){
    include "config.php";
    $sql = "SELECT id FROM produto WHERE nome_produto = '$produto'";
    $query = $mysqli->query($sql);
    $total = $query->num_rows;
    
    return $total;
}

function editarProduto($id){
    include "config.php";
    $sql = "SELECT * FROM produto WHERE id = '$id'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return array($dados);

}

?>
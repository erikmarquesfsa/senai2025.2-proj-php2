<?php

include "config.php";
$id_produto = $_POST['produto'];
$qtde = intval($_POST['qtde_estoque']);

$sql = "SELECT * FROM produto WHERE id = '$id_produto'";
$query = $mysqli->query($sql);
$dados = $query->fetch_array();

if($qtde==0 OR $qtde<=$dados['qtde_estoque']){

    echo "Não temos estoque suficiente do produto"; 
}else{
    $sql = "UPDATE produto SET qtde_estoque = qtde_estoque-$qtde WHERE id = '$id_produto'";
    $query = $mysqli->query($sql);    

    if($query){
        echo "produto comprado";
    }else{
        echo "produto deu erro";
    }



}



?>
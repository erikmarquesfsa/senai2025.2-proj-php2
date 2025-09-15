<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'mercadinho';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco,3307);
//se o mysql está rodando na porta 3306 não é necessário colocar a porta, tendo em vista que é a port padrão.


?>
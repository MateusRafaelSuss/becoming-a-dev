<?php 

///super globais

$nome = (int)$_GET['Usuário']; //(int) converte a variavel para numero inteiro
var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //coleta o ip do usurario que está acessando
echo($ip);


?>
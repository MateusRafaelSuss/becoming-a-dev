<?php 
session_start(); //pode ser substituido pelo arquivo de configurações com require_once("index003-config.php");
echo $_SESSION["nome"];

//Como apagar uma variavel de sessão?
session_unset($_SESSION['nome']); //apaga só o nome. Se não especificar, apaga todas as variaveis de sessão

session_destroy(); //Limpa a varivael e remove o usuário

?>
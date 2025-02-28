<?php 
//Conectar o banco de dados ao PHP 

//o primeiro parametro é o endereço, o segundo é o usuario, o terceiro é a senha e o quarto o nome do banco de dados

$conn = new mysqli("localhost", "root", "", "dbphp7");
if($conn -> connect_error){
    echo "Error". $conn -> connect_error;
} //testa se a conexão está funcionando, e retorna a mensagem de erro se não estiver

//manipular dados do banco pelo php

$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, desssenha) VALUES(?, ?)"); //as interrogações são os parametros que serão enviados ao banco de dados
$stmt -> bind_param("ss", $login, $password); //indica o tipo de dados(string string) que será inserido, e o dado

$login = "user";
$password = "12345";

$stmt -> execute(); //manda esse statment (stmt) ser executado 
///para adicionar mais dados é necessario apenaas repetir a atribuição e o execute

$login = "Mateus";
$senha = "22222";

$stmt -> execute(); //manda esse statment (stmt) ser executado 



?>
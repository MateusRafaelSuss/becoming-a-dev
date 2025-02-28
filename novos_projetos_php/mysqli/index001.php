<?php 
//Conectar o banco de dados ao PHP 

//o primeiro parametro é o endereço, o segundo é o usuario, o terceiro é a senha e o quarto o nome do banco de dados

$connection = new mysqli("localhost", "root", "", "dbphp7");
if($connection -> connect_error){
    echo "Error". $connection -> connect_error;
} //testa se a conexão está funcionando, e retorna a mensagem de erro se não estiver

//manipular dados do banco pelo php

$stmt = $connection -> prepare("INSERT INTO tb_usuarios(deslogin, desssenha) VALUES(? , ?);"); //as interrogações são os parametros que serão enviados ao banco de dados
$stmt -> bind_param("ss", $login, $password); //indica o tipo de dados(string string) que será inserido, e o dado
$login = "user";
$password = "12345";
$stmt -> execute(); //manda esse statment (stmt) ser executado 



?>
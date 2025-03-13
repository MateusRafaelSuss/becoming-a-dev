<?php
require_once("config.php");
///Carrega um único usuário
$root = new usuario();
$root -> loadByid(3);
echo $root;

///Carrega uma lista de usuários
$lista = usuario::getList();
echo json_encode($lista); 

///Carrega uma lista de usuarios buscando pelo login
$search = usuario::search("jo");
echo json_encode($search);

///Carrega um usuario usando o login e a senha 
$usuario = new usuario();
$usuario -> login("", ""); 
echo json_encode($usuario);

///Inserir um novo usuario
$aluno = new usuario();
$aluno -> setDessenha("12345");
$aluno -> insert();

?> 
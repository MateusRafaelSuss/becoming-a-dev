<?php 
namespace class;
require_once("config.php");
use cliente\Cadastro;

$cad = new Cadastro();
$cad -> setNome("Mateus Rafael ");
$cad -> setEmail("mateussuss@gmail.com");
$cad -> setSenha("123344");

echo $cad;

?> 
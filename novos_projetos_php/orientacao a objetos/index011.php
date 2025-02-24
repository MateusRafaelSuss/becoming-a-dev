<?php 
///autoload de arquivos em outras pastas 
//spl- standart php library

function incluirClasses($nomeClasse){
    if (file_exists($nomeClasse.".php")==true){
        require_once ($nomeClasse.".php");
    }
   
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){
    if (file_exists("Abstratas". DIRECTORY_SEPARATOR .".php")==true){
        require_once ("Abstras". DIRECTORY_SEPARATOR .".php");
    }
});

$carro = new DelRey();
$carro -> acelerar(80);

?>
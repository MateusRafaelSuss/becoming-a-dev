<?php 
///incluido classes com autoload
//função que carrega as classes automaticamente sem precisar do require
//é importante que o nome do arquivo tenha o mesmo nome da classe


//require_once("DelRey.php"); com o require fica muito complexo


//função magica que recebe como parametro o nome da classe que foi chamada
//
function __autoload($nomeClasse){
    var_dump($nomeClasse);
    require_once("nomeClass.php");
    
}
$carro = new DelRey();
$carro -> acelerar(80);




?>
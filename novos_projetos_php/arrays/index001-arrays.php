<?php 
///Arrays

//Vetor: uma dimensão

$frutas = array('banana', 'maçã', 'melancia','morango'); 
print_r($frutas); //imprime o array e a sua estrutura
/////////////////////////////////////////////////////////

//arrays bidimensionais 

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Opala";

$carros[1][0] = "Ford";
$carros[1][1] = "Fusion";
$carros[1][2] = "Mustang";

echo end($carros[0]); //o ultimo de determinada posição - o ultimo carro da GM

////////////////////////////////////////////////////////////

$pessoas = array();
array_push($pessoas, array('nome =>João', 'Idade =>20')); //adiciona. Seleciona qual é o array alvo, adiciona outro array, com outros dados
print_r($pessoas[0]['nome']);

?>
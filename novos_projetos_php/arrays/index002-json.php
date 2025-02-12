<?php 
///Json- Javascript object notation
//interoperabilidade de sistemas.
//serializar variaveis

$pessoas = array();
array_push($pessoas, array('nome' =>'João', 'Idade' =>20)); //adiciona. Seleciona qual é o array alvo, adiciona outro array, com outros dados
array_push($pessoas, array('nome'=> 'Mateus', 'Idade' =>16));
 
echo json_encode($pessoas); //transforma um array em json

///////////////////////////////////////////////////////////////

$json = '[{"nome":"Jo\u00e3o","Idade":20},{"nome":"Mateus","Idade":16}]';
$data = json_decode($json, true); //transforma um json em array. A virgula serve para não virar objeto

var_dump($data);

?>
<?php 

///Operadores

// = atribuição
// . operador de concatenação-string
// $nome .= "treinametnos; - pega uma variavel com valor já definido e concatena com um segundo valor

$valorTotal = 0;
$valorTotal +=100;
$valorTotal += 25;
echo($valorTotal);

///OP aritmeticos
// +
// - 
// *
// /
// % modulo- resto de uma divisao 
// ** exponenciação

///OP comparação
$a = 30;
$b = 44;

var_dump($a > $b);
//<
//>
//>=
//<=
//== comparação de valor
// === comparação de tipo de valor
// "!==" não é igual 
// <=> spaceship

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //null coalesce 


//OP incrementais e decrementais

// ++
//-- 
// utiliza-se () para hierarquizar as operações

// ||  pipe-pipe: or- ou 


 
?>
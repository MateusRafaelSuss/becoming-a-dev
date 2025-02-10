<?php 

///Strings

//Aspas
// aspas duplas permite por a variavel dentro das aspas dupas e irá exibir o valor da variavel, já as aspas simples entendem que tudo é texto

//Manipulação de strings
//echo strtoupper($nome); - deixará a informação em letras maiusculas
//echo strtolower($nome); - deixará o texto em minusculo 
//echo ucwords($nome); - altera a primeira letra das palavras para maiusculo
//echo ucfirst($nome); - altera a primeira letra para maiusculo

$empresa = "HCODE";
$empresa = str_replace("O", "0", $empresa); //substitui letras. O primeiro parametro é a letra a ser substituida, a segunda é pela letra que vai substituir, e o ultimo informa a variavel a ser alterada
echo($empresa);

//Manipulação de String 2
$frase = "Ontem eu almocei mal.";
$q = strpos($frase, "almocei"); //verifica a posição - string position, nesse caso, filtra a palavra "almocei"
var_dump($q);

//////////////////////

$texto = substr($frase, 0, $q); //procura até onde vai a frase, mostra o texto até determinado ponto
var_dump($texto);

$texto2 = substr($frase, $q);



?>
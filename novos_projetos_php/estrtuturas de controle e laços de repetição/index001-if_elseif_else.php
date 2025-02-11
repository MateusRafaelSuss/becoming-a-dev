<?php 
///Estrutura de controle e laços de repetição - if, elseif else
//sua estrutura vem com a palavra reservada 'if', () são os parametros e {} bloco a ser executado

///////////////

$idadeMenor = 12;
$idadeMaior = 18;
$idadeMelhhor = 40;

if($idadeMelhor <=55){
    echo "VOCÊ ESTÁ NA MELHOR IDADE";

}else{
    echo "você não está em uma boa idade";
}

//o elseif permite ser executado mais de uma vez, enquanto o else só pode ser executado uma 

if($idadeMelhhor <=35){
    echo "você está na melhor idade";
}else if($idadeMenor <=10){
    echo "você ainda não viveu nada";
}else if($idadeMaior >= 18){
    echo "você já é adulto";
}

//Operador ternario

echo ($idadeMaior > $idadeMenor)? "Menor de Idade": "Maior de Idade";



?>

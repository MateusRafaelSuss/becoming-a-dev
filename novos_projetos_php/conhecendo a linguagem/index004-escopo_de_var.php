<?php 

//escopo de variaveis

$nome = "Mateus";

function teste(){
    global $nome; //sem isso, a função não consegue vizualizar a variável externa de seu escopo
    echo $nome;
}
teste();
?>
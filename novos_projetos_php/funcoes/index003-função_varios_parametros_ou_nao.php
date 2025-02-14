<?php 
///função que pode receber vários parametros ou não
//função interna do php que funciona dentro de uma função criada pelo usuario

function ola(){

    $argumentos = func_get_args(); //recupera todos os argumentos que forem passados como parametro para a função ola, retornando em array
    return $argumentos;
}
var_dump(ola("Bom dia", "Tudo bem?"));



?>
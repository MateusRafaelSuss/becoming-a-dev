<?php 
///parametros de função
//argumento:informações que uma função precisa para trabalhar corretamente

function ola($texto = "mundo", $periodo = "Bom dia!"){ //parametros ficam entre(), neste caso, o parametro é a varivael texto
    return "Olá, $texto!, $periodo "; //interpolação de variavel
}
echo ola(); //vazio = passa o valor da variavel da função
echo ola("mundo. ");
echo ola("Mateus. "); //substitui o valor da variavel da função
echo ola("Dexter Morgan", "Boa noite"); //O "boa noite" substitui o parâmetro da variavel periodo

//se caso a varivael $texto não tiver valor, ou seja, não tenha seu parametrô, você é obrigado a passar um parametro no echo ola()
//em algum momento, será necessario possuir um argumento para executar a função, seja ele informado antes ou depois


 
?>
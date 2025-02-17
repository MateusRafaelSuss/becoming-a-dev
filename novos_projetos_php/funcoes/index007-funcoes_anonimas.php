<?php 
///Funções anonimas
//Não possui nome, basta apenas sua execução dentro da variavel ou comando, e não possui return 
function test($callback){
    //processo lento
    $callback();

}
test(function(){
    echo "terminou";
})


?>
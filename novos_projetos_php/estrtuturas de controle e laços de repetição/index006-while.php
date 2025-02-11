<?php 
//While e do while
//coletar dados do banco de dados por exemplo
//A diferença entre os dois, é que o do while executa a ação pelo menos uma vez

$condicao = true;
while($condicao){
    $numero = rand(0, 50);
    if($numero === 3){
        echo "TRES!!!!!!!!";
        $condicao = false;
    }
    echo $numero;
}




?>
<?php 
//Funções- Funcões de usuario
function ola(){
    echo 'Olá, Mundo';
}
ola();
///////////////////////////////////////////////////////////////////

function ola(){
    return 'Olá, Mundo';
}
echo ola()

//o return abre mais possibilidades 

$frase = ola();
echo strlen($frase);

///////////////////////////////////////////////////////////////

function salario(){
    return 946.00;
}
echo "José recebeu 3 salarios:" . (salario()*3);
?> 